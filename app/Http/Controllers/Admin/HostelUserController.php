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
        $users = User::all();
        return view('admin.user.userView',['users'=>$users]);
    }
    public function userList ($id){
        // $users= User::where('')
        return view('admin.user.userView');
    }
    public function userDetail($id){
        $user = User::findorFail($id);
        return view('admin.user.userDetails',['user'=>$user]);
    } 
    public function userDelete($id){
        User::findorFail($id)->delete();
        return redirect('/admin/user')->with('status','User Deleted.');
    }

}
