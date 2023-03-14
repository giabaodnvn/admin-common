<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function showLoginForm(Request $request)
    {
        if ($request->session()->exists('user_admin')) {
            return redirect()->route('admin-index');
        }
        return view('user.login');
    }

    public function postFormLogin(Request $request)
    {
        if ($request->email == 'test@gmail.com' && $request->password == '123123')
        {
            session()->put('user_admin', $request->email);
            return redirect()->route('admin-index');
            
        } else {
            return redirect()->route('user-login');
           
        }
    }
    
}

