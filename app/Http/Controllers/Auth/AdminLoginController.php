<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
<<<<<<< HEAD

=======
use Route;
>>>>>>> 8ecbce1f82c5323dfbbcb0d5029ebde07e799a46
class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
      return view('auth.adminLogin');
    }
    public function login(Request $request)
    {
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
<<<<<<< HEAD
        return redirect('/admin');
=======
        return redirect()->intended(route('admin'));
        // return redirect('/admin');
>>>>>>> 8ecbce1f82c5323dfbbcb0d5029ebde07e799a46
        // ->intended(route('admin'));
      } 
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
    
}
