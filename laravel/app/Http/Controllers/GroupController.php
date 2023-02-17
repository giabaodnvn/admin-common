<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\GroupRepository;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    private $groupRepository;

    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = $this->groupRepository->with('employees')->all();
        return view('pages.group.index')->with(['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.group.create');
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
            $data = [
                'name' => $request->name,
            ];
            $created = $this->groupRepository->create($data);
            $response = [
                'message' => 'OK!',
                'data' => $created->toArray(),
            ];
            return redirect()->route('group.list')->with(
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
        $group = $this->groupRepository->find($id);
        return view('pages.group.edit')->with(['group' => $group]);
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
            $data = $request->only('name');
            $groupUpdated = $this->groupRepository->update($data, $id);
            $response = [
                'message' => trans('messages.group.updated'),
                'data' => $groupUpdated->toArray(),
            ];
            return redirect()->route('group.list')->with('message',
                $response['message']);
        } catch (\Exception $e) {
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
            $group = $this->groupRepository->find($id);
            if (!empty($group)) {
                $group->delete($id);
            } else {
                return redirect()->back()->withInput();
            }
            $response = [
                'message' => 'Xóa thành công!',
            ];
            return redirect()->route('group.list')->with(
                'message',
                $response['message']
            );
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
