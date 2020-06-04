<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Admin;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }
    
    public function register(){
        return view('admin.superAdmin.register');
    }
    public function create(Request $request){
        $this->validate($request,[
            'name'=>'required','string', 'max:255',
            'email'=>'required|string|email|max:255|unique:admins',
            'password'=>'required|string|min:8|confirmed',
        ]);
        Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => 'super',
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/admin/login');
    }
}
