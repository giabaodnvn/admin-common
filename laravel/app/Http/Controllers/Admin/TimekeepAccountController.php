<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\TimekeepAccount;

use App\Repositories\Interfaces\TimekeepAccountRepository;
use App\Repositories\Interfaces\GroupRepository;

use Excel;


class TimekeepAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $timekeepaccountRepository;
    private $groupRepository;

    public function __construct(TimekeepAccountRepository $timekeepaccountRepository, GroupRepository $groupRepository)
    {
        $this->timekeepaccountRepository = $timekeepaccountRepository;
        $this->groupRepository = $groupRepository;
    }
    public function index()
    {
        $groups = $this->groupRepository->all();
        $timekeepaccounts = $this->timekeepaccountRepository->with('group')->get();
        return view('Admin.pages.timekeepaccount.index')->with([ 'timekeepaccounts'=>$timekeepaccounts,'groups'=>$groups]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = $this->groupRepository->all();
        return view('Admin.pages.timekeepaccount.create')->with(['groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $created = $this->timekeepaccountRepository->create($data);
            $response = [
                'message' => trans('OK'),
                'data' => $created->toArray(),
            ];
            return redirect()->route('employee.list')->with(
                'message',
                $response['message']
            );
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->withInput();
        }
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
        $timekeepaccount = $this->timekeepaccountRepository->find($id);
        $groups = $this->groupRepository->get();
        return view('Admin.pages.timekeepaccount.edit')->with(['timekeepaccount' => $timekeepaccount, 'groups' => $groups]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->except('_token');
            $updated = $this->timekeepaccountRepository->update($data, $id);
            $response = [
                'message' => trans('OK!'),
                'data' => $updated->toArray(),
            ];
            return redirect()->route('timekeepaccount.list')->with('message', $response['message']);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $deleted = $this->timekeepaccountRepository->delete($id);
            $response = [
                'message' => 'OK'
            ];
            return redirect()->route('timekeepaccount.list')->with('message', $response['message']);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
