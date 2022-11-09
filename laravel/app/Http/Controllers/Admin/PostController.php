<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\PostTranslationRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\TagRepository;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostTagRepository;
use Yajra\Datatables\Datatables;
use App\Http\Requests\Admin\PostCreateRequest;
use App\Http\Requests\Admin\PostUpdateRequest;
use App\Models\Post;
use DB, Flash;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * @var PostTranslationRepository
     */
    private $postTranslationRepository;

    /**
     * @var TagRepository
     */
    private $tagRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var PostCategoryRepository
     */
    private $postCategoryRepository;

    /**
     * @var PostTagRepository
     */
    private $postTagRepository;

    /**
     * PostController Constructor
     */
    public function __construct(PostRepository $postRepo, PostTranslationRepository $postTransRepo, TagRepository $tagRepo, CategoryRepository $categoryRepo,
    PostCategoryRepository $postCategoryRepo, PostTagRepository $postTagRepo)
    {
        $this->postRepository = $postRepo;
        $this->tagRepository = $tagRepo;
        $this->categoryRepository = $categoryRepo;
        $this->postCategoryRepository = $postCategoryRepo;
        $this->postTagRepository = $postTagRepo;
        $this->postTranslationRepository = $postTransRepo;

        $this->middleware('permission:posts.index');
        $this->middleware('permission:posts.create', ['only' => ['create','store']]);
        $this->middleware('permission:posts.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:posts.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->postRepository->with(['category'])->all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $button = '<a class="btn btn-icon bg-gradient-danger btn-sm ml-1 deleteDialog" data-id="'.$row->id.'" title="Delete">
                                <i class="fas fa-trash"></i>';
                    return $button;
                })
                ->editColumn('image', function($row) {
                    return '<img src="'. $row->image .'" alt="Thumbnail" style="width: 80px; height: 50px">';
 
                })
                ->addColumn('edit', function($row){
                    $button = '<a href="'.route("admin.posts.edit", $row->id).'" class="btn btn-icon bg-gradient-info btn-sm mr-1" title="Edit with Vietnamese">
                    <i class="fas fa-edit"></i>';

                    $button .= '<a href="'.route("admin.posts.edit",[ $row->id, 'ref_lang' => 'en']).'" class="btn btn-icon bg-gradient-warning btn-sm mr-1" title="Edit with English">
                    <i class="fas fa-edit"></i>';
                    return $button;
                })
                ->editColumn('title', function($row) {
                    return '<a href="'.route("admin.posts.edit", $row->id).'">'.$row->title.'</a>';
                })
                ->editColumn('status', function($row) {                  
                    if ($row->status == 0) {
                        $label = '<span class="badge bg-success p-2">Published</span>';
                    } else {
                        $label = '<span class="badge bg-secondary p-2">Pending</span>';
                    }
                    return $label;
                })
                ->addColumn('categories', function($data) {
                    return $data->category->map(function($category) {
                        return '<a href="'.route("admin.categories.edit", $category->id).'">'.$category->name.'</a>';
                    })->implode(', ');
                })
                ->editColumn('updated_at', function($row) {
                    return $row->updated_at->format('Y/m/d');
                })
                ->rawColumns(['action','status','title','categories', 'edit','image'])
                ->make(true);
        }
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->with(['subCategories'])->whereNull('parent_id')->get();
        $tags = $this->tagRepository->all();
        $status = config('constants')['status'];
        $langs = config('constants')['languages'];
        return view('admin.posts.create', compact(['categories', 'tags', 'status','langs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostCreateRequest request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        $inputPost = $request->only(['featured','status']);
        if ($request->has('image')) {
            $inputPost['image'] = get_path_image($request->image);
        }
        DB::beginTransaction();
        try {
            $postId = $this->postRepository->create($inputPost)->id;
            $inputTrans = $request->only(['title','description','content','slug']);
            $inputTrans['post_id'] = $postId;
            $inputTrans['locale'] = 'vn';
            $this->postTranslationRepository->create($inputTrans);
            $categories = $request->categories;
            if (!empty($categories)) {
                $inputPostCategories['post_id'] = $postId;
                foreach ($categories as $category) {
                    $inputPostCategories['category_id'] = $category;
                    $this->postCategoryRepository->create($inputPostCategories);
                }
            }
            $inputTags = $request->tags; //Lấy các tags nhập vào
            if (!empty($inputTags)) {
                $tags = $this->tagRepository->findWhereIn('name',$inputTags); //Lấy các tags dựa vào input nhập vào
                $tagIdsexist = [];
                foreach ($tags as $tag) {
                    $tagIdsexist[] = $tag->id; 
                }
                $inputPostTags['post_id'] = $postId;
                foreach ($tagIdsexist as $value) {
                    $inputPostTags['tag_id'] = $value;
                    $this->postTagRepository->create($inputPostTags);
                }
                $duplicateNames = [];
                for ($i = 0; $i < count($inputTags); $i++) { 
                    foreach ($tags as $tag) {
                        if ($inputTags[$i] === $tag->name) {
                            array_push($duplicateNames, $inputTags[$i]);
                        }
                    }
                }
                $newTags = array_diff($inputTags, $duplicateNames);
                if (!empty($newTags)) {
                    $myArray = [];
                    //Insert các Tag mới vào DB
                    foreach ($newTags as $value) {
                        $myArray['name'] = $value;
                        $insertGetTagIds[] = $this->tagRepository->create($myArray)->id;   
                    }
                    foreach ($insertGetTagIds as $insertGetTagId) {
                        $inputPostTags['tag_id'] = $insertGetTagId;
                        $this->postTagRepository->create($inputPostTags);
                    }
                }
            }
            DB::commit();   
        } catch (ValidatorException $e) {
            DB::rollBack();
            Flash::error($e->getMessage());            
        }
        return redirect(route('admin.posts.index'))->with('success-store','Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->with(['category','tag'])->find($id);
        if (request()->has('ref_lang') && request()->get('ref_lang') == 'en' && $post->hasTranslation('en')) {
            $post->setDefaultLocale('en');
        }
        $tags = $this->tagRepository->get();
        $postTags = $post->tag->pluck('id')->toArray();
        $categories = $this->categoryRepository->with(['subCategories'])->whereNull('parent_id')->get();
        $postCategories = $post->category->pluck('id')->toArray();
        $status = config('constants')['status'];
        return view('admin.posts.edit', compact(['post', 'tags', 'categories', 'postTags', 'postCategories', 'status']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $inputTrans = $request->only(['title','description','content','slug']);
        $inputPost = $request->only(['featured','status']);
        if ($request->has('image')) {
            $inputPost['image'] = get_path_image($request->image);
        }
        DB::beginTransaction();
        try {
            if ($request->get('locale') == 'en') {
                $this->postTranslationRepository->updateOrCreate(['post_id' => $id, 'locale' => 'en'],$inputTrans);
            } else {
                $post = $this->postRepository->update($inputPost, $id);
                $this->postTranslationRepository->updateOrCreate(['post_id' => $id, 'locale' => 'vn'],$inputTrans);
                $this->postCategoryRepository->deleteWhere(['post_id' => $id]);
                $categories = $request->categories;
                if (!empty($categories)) {
                    $inputPostCategories['post_id'] = $id;
                    foreach ($categories as $category) {
                        $inputPostCategories['category_id'] = $category;
                        $this->postCategoryRepository->updateOrCreate($inputPostCategories);
                    }
                }
                $inputTags = $request->tags;
                if (!empty($inputTags)) {
                    $tags = $this->tagRepository->findWhereIn('name',$inputTags); //Lấy các tags dựa vào input nhập vào
                    $tagIdsexist = []; //Mảng các tag_id đã tồn tại trong db
                    foreach ($tags as $tag) {
                        $tagIdsexist[] = $tag->id; 
                    }
                    $inputPostTags['post_id'] = $id;
                    $this->postTagRepository->deleteWhere(['post_id' => $id]);
                    foreach ($tagIdsexist as $value) {
                        $inputPostTags['tag_id'] = $value;
                        $this->postTagRepository->create($inputPostTags);
                    }
                    $duplicateNames = [];
                    for ($i = 0; $i < count($inputTags); $i++) { 
                        foreach ($tags as $tag) {
                            if ($inputTags[$i] === $tag->name) {
                                array_push($duplicateNames, $inputTags[$i]);
                            }
                        }
                    }
                    $newTags = array_diff($inputTags, $duplicateNames);
                    if (!empty($newTags)) {
                        $myArray = [];
                        foreach ($newTags as $value) {
                            $myArray['name'] = $value;
                            $insertGetTagIds[] = $this->tagRepository->create($myArray)->id;   
                        }
                        foreach ($insertGetTagIds as $insertGetTagId) {
                            $inputPostTags['tag_id'] = $insertGetTagId;
                            $this->postTagRepository->create($inputPostTags);
                        }
                    }
                }
                if (empty($post)) {
                    return redirect(route('admin.posts.index'));
                }
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Flash::error($e->getMessage());  
        }
        return redirect(route('admin.posts.index'))->with('success-update', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->postRepository->delete($id);
        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Record has been deleted.']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Has occurred error.']);
        }
    }
}
