<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryTranslationRepository;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\Admin\CategoryCreateRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
        
    /**
     * @var  CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var CategoryTranslationRepository
     */
    private $categoryTranslationRepository;

    /**
     * Category Contructor
     */
    public function __construct(CategoryRepository $categoryRepo, CategoryTranslationRepository $categoryTranslationRepo)
    {
        $this->categoryRepository = $categoryRepo;
        $this->categoryTranslationRepository = $categoryTranslationRepo;

        $this->middleware('permission:categories.index');
        $this->middleware('permission:categories.create', ['only' => ['create','store']]);
        $this->middleware('permission:categories.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:categories.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->categoryRepository->all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $button = '<a class="btn btn-icon bg-gradient-danger btn-sm ml-1 deleteDialog" data-id="'.$row->id.'" title="Delete">
                                <i class="fas fa-trash"></i>';
                    return $button;
                })
                ->editColumn('name', function($row) {
                    return '<a href="'.route("admin.categories.edit", $row->id).'">'.$row->name.'</a>';
                })
                ->editColumn('status', function($row) {                  
                    if ($row->status == 0) {
                        $label = '<span class="badge bg-success p-2">Published</span>';
                    } else {
                        $label = '<span class="badge bg-secondary p-2">Pending</span>';
                    }
                    return $label;
                })
                ->editColumn('created_at', function($row) {
                    return $row->created_at->format('Y/m/d');
                })
                ->editColumn('updated_at', function($row) {
                    return $row->updated_at->format('Y/m/d');
                })
                ->addColumn('edit', function($row){
                    $button = '<a href="'.route("admin.categories.edit", $row->id).'" class="btn btn-icon bg-gradient-info btn-sm mr-1" title="Edit with Vietnamese">
                    <i class="fas fa-edit"></i>';

                    $button .= '<a href="'.route("admin.categories.edit",[ $row->id, 'ref_lang' => 'en']).'" class="btn btn-icon bg-gradient-warning btn-sm mr-1" title="Edit with English">
                    <i class="fas fa-edit"></i>';
                    return $button;
                })
                ->rawColumns(['action','status','name','edit'])
                ->make(true);
        }
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->with(['subCategories'])->whereNull('parent_id')->get();
        $status = config('constants')['status'];
        return view('admin.categories.create', compact('categories', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $inputCategory = $request->only(['parent_id', 'status']);
        $inputTrans = $request->only(['name','description','slug']);
        DB::beginTransaction();
        try {
            $categoryId = $this->categoryRepository->create($inputCategory)->id;
            $inputTrans['category_id'] = $categoryId;
            $inputTrans['locale'] = 'vn';
            $this->categoryTranslationRepository->create($inputTrans);
            DB::commit();
        } catch (ValidatorException  $e) {
            DB::rollBack();
            Flash::error($e->getMessage());
        }
        return redirect(route('admin.categories.index'))->with('success-store', 'Created successfully');

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
        $data = $this->categoryRepository->find($id);
        if (request()->has('ref_lang') && request()->get('ref_lang') == 'en' && $data->hasTranslation('en')) {
            $data->setDefaultLocale('en');
        }
        $categories = $this->categoryRepository->with(['subCategories'])->whereNotIn('id',[$id])->whereNull('parent_id')->get();
        $status = config('constants')['status'];
        $type = 'edit';
        return view('admin.categories.edit', compact(['data','categories', 'status', 'type']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $inputTrans = $request->only(['name','description','slug']);
        $inputCategory = $request->only(['parent_id','status']);
        DB::beginTransaction();
        try {
            if ($request->get('locale') == 'en') {
                $this->categoryTranslationRepository->updateOrCreate(['category_id' => $id, 'locale' => 'en'],$inputTrans);
            } else {
                $this->categoryTranslationRepository->updateOrCreate(['category_id' => $id, 'locale' => 'vn'],$inputTrans);
                $category = $this->categoryRepository->update($inputCategory, $id);
                if (empty($category)) {
                    return redirect(route('admin.categories.index'));
                }                
            }
            DB::commit();
        } catch (ValidatorException $e) {
            DB::rollback();
            Flash::error($e->getMessage());
        }
        return redirect(route('admin.categories.index'))->with('success-update', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->categoryRepository->delete($id);
        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Record has been deleted.']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Has occurred error.']);
        }
    }
}
