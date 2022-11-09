<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Yajra\Datatables\Datatables;
use App\Repositories\TagRepository;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\Admin\TagCreateRequest;
use App\Http\Requests\Admin\TagUpdateRequest;
use DB;
use Flash;

class TagController extends Controller
{
    /**
     * @var  TagRepository
     */
    private $tagRepository;

    /**
     * TagController Constructor
     */
    public function __construct(TagRepository $tagRepo)
    {
        $this->tagRepository = $tagRepo;

        $this->middleware('permission:tags.index');
        $this->middleware('permission:tags.create', ['only' => ['create','store']]);
        $this->middleware('permission:tags.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:tags.delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->tagRepository->all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $button = '<a href="'.route("admin.tags.edit", $row->id).'" class="btn btn-icon bg-gradient-info btn-sm mr-1" title="Edit">
                                <i class="fas fa-edit"></i>';
                    $button .= '<a class="btn btn-icon bg-gradient-danger btn-sm ml-1 deleteDialog" data-id="'.$row->id.'" title="Delete">
                                <i class="fas fa-trash"></i>';
                    return $button;
                })
                ->editColumn('name', function($row) {
                    return '<a href="'.route("admin.tags.edit", $row->id).'">'.$row->name.'</a>';
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
                ->rawColumns(['action','status','name'])
                ->make(true);
        }
        return view('admin.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = config('constants')['status'];
        return view('admin.tags.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagCreateRequest $request)
    {
        $data = $request->all();
        DB::beginTransaction();
        try {
            $tag = $this->tagRepository->create($data);
            DB::commit();
        } catch (ValidatorException $e) {
            DB::rollBack();
            Flash::error($e->getMessage());
        }
        return redirect(route('admin.tags.index'))->with('success-store', 'Created successfully');
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
        $tag = $this->tagRepository->find($id);
        $status = config('constants')['status'];
        return view('admin.tags.edit', compact(['tag','status']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
        $data = $request->all();
        DB::beginTransaction();
        try {
             $tag = $this->tagRepository->update($data, $id);
            if (empty($tag)) {
                return redirect(route('admin.tags.index'));
            }
            DB::commit();           
        } catch (Exception $e) {
            DB::rollback();
            Flash::error($e->getMessage());            
        }
        return redirect(route('admin.tags.index'))->with('success-update', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->tagRepository->delete($id);
        if ($result) {
            return response()->json(['status' => 1, 'message' => 'Record has been deleted.']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Has occurred error.']);
        }
    }
}