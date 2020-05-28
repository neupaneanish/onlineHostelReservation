<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use App\Admin;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminRegisterController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function showRegisterForm()
    {
      return view('auth.adminRegister');
    }
    public function register(Request $request){
        $this->validate($request,[
            'name'=>'required','string', 'max:255',
            'email'=>'required|string|email|max:255|unique:admins',
            'password'=>'required|string|min:8|confirmed',

        ]);
        Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/admin');
    }
    //
}
