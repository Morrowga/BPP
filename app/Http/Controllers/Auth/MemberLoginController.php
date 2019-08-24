<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class MemberLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo;
     public function __construct()
    {  
    $this->redirectTo = "/newfeed";
    $this->middleware('guest')->except('logout');
    }
    public function showMemberLoginForm()
    {   
        return view('auth.memberlogin', ['url' => 'user']);
        
    }
    public function logout() {
        Auth::logout();
    }
    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended($this->redirectTo);
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
