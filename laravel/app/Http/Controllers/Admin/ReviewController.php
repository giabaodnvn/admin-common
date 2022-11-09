<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ReviewRepository;
use App\Repositories\ReviewTranslationRepository;
use Prettus\Validator\Exceptions\ValidatorException;
use Yajra\Datatables\Datatables;
use App\Http\Requests\Admin\ReviewCreateRequest;
use App\Http\Requests\Admin\ReviewUpdateRequest;
use DB, Flash;

class ReviewController extends Controller
{
    /**
     * @var ReviewRepository
     */
    private $reviewRepository;

    /**
     * @var ReviewTranslationRepository
     */
    private $reviewTranslationRepository;

    /**
     * PermissionController Contstructor
     */
    public function __construct(ReviewRepository $reviewRepo, ReviewTranslationRepository $reviewTranslationRepo)
    {
        $this->reviewRepository = $reviewRepo;
        $this->reviewTranslationRepository = $reviewTranslationRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->reviewRepository->all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $button = '<a class="btn btn-icon bg-gradient-danger btn-sm ml-1 deleteDialog" data-id="'.$row->id.'" title="Delete">
                                <i class="fas fa-trash"></i>';
                    return $button;
                })
                ->editColumn('logo', function($row) {
                    return '<img src="'. $row->logo .'" alt="Logo" style="width: 80px; height: 50px">';
 
                })
                ->addColumn('edit', function($row){
                    $button = '<a href="'.route("admin.reviews.edit", $row->id).'" class="btn btn-icon bg-gradient-info btn-sm mr-1" title="Edit with Vietnamese">
                    <i class="fas fa-edit"></i>';

                    $button .= '<a href="'.route("admin.reviews.edit",[ $row->id, 'ref_lang' => 'en']).'" class="btn btn-icon bg-gradient-warning btn-sm mr-1" title="Edit with English">
                    <i class="fas fa-edit"></i>';
                    return $button;
                })
                ->editColumn('name', function($row) {
                    return '<a href="'.route("admin.reviews.edit", $row->id).'">'.$row->name.'</a>';
                })
                ->editColumn('status', function($row) {                  
                    if ($row->status == 0) {
                        $label = '<span class="badge bg-success p-2">Published</span>';
                    } else {
                        $label = '<span class="badge bg-secondary p-2">Pending</span>';
                    }
                    return $label;
                })
                ->editColumn('updated_at', function($row) {
                    return $row->updated_at->format('Y/m/d');
                })
                ->rawColumns(['action','status','name', 'edit','logo'])
                ->make(true);
        }
        return view('admin.reviews.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = config('constants')['status'];
        $rates  = config('constants')['rates'];
        return view('admin.reviews.create', compact('status','rates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewCreateRequest $request)
    {
        $inputReview = $request->only(['rate', 'link', 'status']);
        if ($request->has('logo')) {
            $inputReview['logo'] = get_path_image($request->logo);
        }
        $inputTrans = $request->only(['name','description','slug', 'content']);
        DB::beginTransaction();
        try {
            $reviewId = $this->reviewRepository->create($inputReview)->id;
            $inputTrans['review_id'] = $reviewId;
            $inputTrans['locale'] = 'vn';
            $this->reviewTranslationRepository->create($inputTrans);
            DB::commit();
        } catch (ValidatorException  $e) {
            DB::rollBack();
            Flash::error($e->getMessage());
        }
        return redirect(route('admin.reviews.index'))->with('success-store', 'Created successfully');
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
        $review = $this->reviewRepository->find($id);
        if (request()->has('ref_lang') && request()->get('ref_lang') == 'en' && $review->hasTranslation('en')) {
            $review->setDefaultLocale('en');
        }
        $status = config('constants')['status'];
        $rates  = config('constants')['rates'];
        return view('admin.reviews.edit', compact(['review', 'rates', 'status']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ReviewUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewUpdateRequest $request, $id)
    {
        $inputReview = $request->only(['rate', 'link', 'status']);
        if ($request->has('logo')) {
            $inputReview['logo'] = get_path_image($request->logo);
        }
        $inputTrans = $request->only(['name','description','slug', 'content']);
        DB::beginTransaction();
        try {
            if ($request->get('locale') == 'en') {
                $this->reviewTranslationRepository->updateOrCreate(['review_id' => $id, 'locale' => 'en'],$inputTrans);
            } else {
                $this->reviewTranslationRepository->updateOrCreate(['review_id' => $id, 'locale' => 'vn'],$inputTrans);
                $review = $this->reviewRepository->update($inputReview, $id);
                if (empty($review)) {
                    return redirect(route('admin.reviews.index'));
                }                
            }
            DB::commit();
        } catch (ValidatorException $e) {
            DB::rollback();
            Flash::error($e->getMessage());
        }
        return redirect(route('admin.reviews.index'))->with('success-update', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->reviewRepository->delete($id);
        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Record has been deleted.']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Has occurred error.']);
        }
    }
}
