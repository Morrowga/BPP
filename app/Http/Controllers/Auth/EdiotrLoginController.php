<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class EditorLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo; 
     public function __construct()
    {
        $this->redirectTo = '/' . config("backend.editor_link");
        $this->middleware('guest:editor')->except('logout');
    }
    public function showEditorLoginForm()
    {
        return view('auth.login', ['url' => 'editor']);
    }
    public function logout() {
        Auth::logout();
    }
    public function editorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email|unique:users|unique:admins',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('editor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended($redirectTo);
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}