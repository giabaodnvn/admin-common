<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Http\Requests\Admin\UserCreateRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB, Flash;

class UserController extends Controller
{
    /**
     * @var  UserRepository
     */
    private $userRepository;

    /**
     * @var  RoleRepository
     */
    private $roleRepository;

    /**
     * TagController Constructor
     */
    public function __construct(UserRepository $userRepo, RoleRepository $roleRepo)
    {
        $this->userRepository = $userRepo;
        $this->roleRepository = $roleRepo;

        $this->middleware('permission:users.index');
        $this->middleware('permission:users.create', ['only' => ['create','store']]);
        $this->middleware('permission:users.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:users.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->userRepository->all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $button = '<a href="'.route("admin.users.edit", $row->id).'" class="btn btn-icon bg-gradient-info btn-sm mr-1" title="Edit">
                                <i class="fas fa-edit"></i>';
                    $button .= '<a class="btn btn-icon bg-gradient-danger btn-sm ml-1 deleteDialog" data-id="'.$row->id.'" title="Delete">
                                <i class="fas fa-trash"></i>';
                    return $button;
                })
                ->editColumn('name', function($row) {
                    return '<a href="'.route("admin.users.edit", $row->id).'">'.$row->name.'</a>';
                })
                ->editColumn('avatar', function($row) {
                    if (!empty($row->avatar)) {
                        return '<img src="'. $row->avatar .'" alt="Avatar" style="width: 50px; height: 50px">';
                    } else {
                        return '<img src="static/img/user-placeholder.jpg" alt="Avatar" style="width: 50px; height: 50px">';
                    }  
                })
                ->editColumn('status', function($row) {                  
                    if ($row->status == 0) {
                        $label = '<span class="badge bg-success p-2">Active</span>';
                    } else {
                        $label = '<span class="badge bg-secondary p-2">InActive</span>';
                    }
                    return $label;
                })
                ->editColumn('created_at', function($row) {
                    return $row->created_at->format('Y/m/d');
                })
                ->rawColumns(['action','status','name', 'avatar'])
                ->make(true);
        }
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = config('constants')['user_status'];
        $roles = $this->roleRepository->get();
        return view('admin.users.create', compact(['status', 'roles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UserCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $input = $request->all();
        if ($request->has('avatar')) {
            $input['avatar'] = get_path_image($request->avatar);
        }
        $input['password'] = Hash::make($request->password);
        $role = $request->input('role');
        DB::beginTransaction();
        try {
           $user = $this->userRepository->create($input);
           $user->assignRole($role);
           DB::commit();
        } catch (ValidatorException $e) {
            DB::rollBack();
            Flash::error($e->getMessage());
        }
        return redirect()->route('admin.users.index')->with('success-store', 'Created successfully');


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
        $user = $this->userRepository->find($id);
        unset($user->password);
        $status = config('constants')['user_status'];
        $roles = $this->roleRepository->get();
        $userHasRole = $user->getRoleNames()->toArray();
        return view('admin.users.edit', compact(['user', 'roles', 'userHasRole', 'status']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserUpdateRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $input = $request->all();
        if ($request->has('avatar')) {
            $input['avatar'] = get_path_image($request->avatar);
        }
        if ($request->password) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        $role = $request->input('role');
        DB::beginTransaction();
        try {
            $user = $this->userRepository->update($input, $id);
            $user->syncRoles($role);
            DB::commit();
        } catch (ValidatorException $e) {
            DB::rollback();
            Flash::error($e->getMessage());
        }
        return redirect()->route('admin.users.index')->with('success-update', 'Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            return response()->json(['success' => false, 'message' => 'User not found.']);
        }
        if ($user->id == Auth::id()) {
            return response()->json(['success' => false, 'message' => 'Deleted failed. This is your account.']);
        }
        $result = $this->userRepository->delete($id);
        if ($result) {
            return response()->json(['success' => true, 'message' => 'Record has been deleted.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Has occurred error.']);
        }

    }
}
