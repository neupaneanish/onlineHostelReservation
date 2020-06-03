<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use App\model\Admin;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminRegisterController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function showRegisterForm()
    {
      return view('admin.mgmtAdmin.createAdmin');
    }
    public function register(Request $request){
        $this->validate($request,[
            'name'=>'required','string', 'max:255',
            'email'=>'required|string|email|max:255|unique:admins',
            'password'=>'required|string|min:8|confirmed',

        ]);
        // return "Ok";
        Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => 'normal',
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/admin/register')->with('status','New Admin Created');
       
        
    }
    //
}
