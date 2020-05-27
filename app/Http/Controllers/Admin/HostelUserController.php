<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\users\Hostel;

class HostelUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index(){
        $users = Hostel::all();
        return view('admin.user.listUser',['users'=>$users]);
    }
    public function userList ($id){
        // $users= User::where('')
        return view('admin.user.userView');
    }
    public function userDetail(){
        // return "hello";
        return view('admin.user.userDetails');
    } 

}
