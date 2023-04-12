<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use App\Models\TimekeepAccount;

use App\Repositories\Interfaces\TimekeepAccountRepository;
use App\Repositories\Interfaces\GroupRepository;

use Excel;


class TimekeepAccountUserController extends Controller
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
    
    public function setTimeKeep() {
        return view('User.timekeep.index');
    }
}
