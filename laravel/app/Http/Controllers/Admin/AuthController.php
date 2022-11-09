<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @var rememberToken;
     */
	private $rememberToken = true;

    /**
     * Login Page
     * 
     * @return \Illuminate\Contracts\View\View
     */

    public function showLoginForm()
    {

        return view('admin.login');
    }

    /**
     * Handle Login
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $this->rememberToken)) {
            $user = Auth::user();
            if ($user->checkIsAdmin() || $user->checkIsManager()) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->back()->with('error', 'Permission denied');
            }
        }
        return redirect()->back()->with('error', 'Wrong email or password')->withInput($request->only('email', 'remember'));
    }

    /**
     * Logout
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login.form');
    }
}
