<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\RoleRepository;
use App\Repositories\PermissionRepository;
use Prettus\Validator\Exceptions\ValidatorException;
use Yajra\Datatables\Datatables;
use App\Http\Requests\Admin\RoleCreateRequest;
use App\Http\Requests\Admin\RoleUpdateRequest;
use DB, Flash;

class RoleController extends Controller
{
    /**
     * @var RoleRepository
     */
    private $roleRepository;

    /**
     * @var PermissionRepository
     */
    private $permissionRepository;

    /**
     * PermissionController Contstructor
     */
    public function __construct(RoleRepository $roleRepo, PermissionRepository $permissionRepo)
    {
        $this->roleRepository = $roleRepo;
        $this->permissionRepository = $permissionRepo;

        $this->middleware('permission:roles.index');
        $this->middleware('permission:roles.create', ['only' => ['create','store']]);
        $this->middleware('permission:roles.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:roles.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->roleRepository->all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $button = '<a href="'.route("admin.roles.edit", $row->id).'" class="btn btn-icon bg-gradient-info btn-sm mr-1" title="Edit">
                                <i class="fas fa-edit"></i>';
                    $button .= '<a class="btn btn-icon bg-gradient-danger btn-sm ml-1 deleteDialog" data-id="'.$row->id.'" title="Delete">
                                <i class="fas fa-trash"></i>';
                    return $button;
                })
                ->editColumn('name', function($row) {
                    return '<a href="'.route("admin.roles.edit", $row->id).'">'.$row->name.'</a>';
                })
                ->editColumn('created_at', function($row) {
                    return $row->created_at->format('Y/m/d');
                })
                ->rawColumns(['action','name'])
                ->make(true);
        }
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = $this->permissionRepository->get();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleCreateRequest $request)
    {
        $input = $request->except('permissions');
        DB::beginTransaction();
        try {
            $role = $this->roleRepository->create($input);
            $role->givePermissionTo($request->permissions);
            DB::commit();
        } catch (ValidatorException $e) {
            DB::rollback();
            Flash::error($e->getMessage());
        }
        return redirect()->route('admin.roles.index')->with('success-store', 'Created successfully');
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
        $role = $this->roleRepository->find($id);
        $permissions = $this->permissionRepository->get();
        $roleHasPermission = DB::table('role_has_permissions')->where('role_id', $id)->pluck('permission_id','permission_id')->all();
        return view('admin.roles.edit', compact(['role', 'permissions', 'roleHasPermission']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, $id)
    {
        $input = $request->except('permissions');
        DB::beginTransaction();
        try {
            $role = $this->roleRepository->update($input, $id);
            $role->syncPermissions($request->permissions);
            DB::commit();
        } catch (ValidatorException $e) {
            DB::rollback();
            Flash::error($e->getMessage());
        }
        return redirect()->route('admin.roles.index')->with('success-update', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->find($id);
        if (empty($role)) {
            return response()->json(['status' => 0, 'message' => 'Role not found.']);
        }
        if (\Auth::user()->hasRole($role->name)) {
            return response()->json(['status' => 0, 'message' => 'Deleted failed. This is your rule.']);
        }
        $result = $this->roleRepository->delete($id);
        if ($result) {
            return response()->json(['success' => true, 'message' => 'Record has been deleted.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Has occurred error.']);
        }
    }
}
