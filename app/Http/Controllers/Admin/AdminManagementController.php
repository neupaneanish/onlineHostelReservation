<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\model\Admin;

class AdminManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function admin(){
        $admins = Admin::all();
        return view('admin.mgmtAdmin.mgmtAdmin',['admins'=>$admins]);
    }
    public function password($id){
       $admin =  Admin::findorFail($id);
        return view('admin.mgmtAdmin.reset',['admin'=>$admin]);
    }
    public function reset(Request $request, $id){
        $this->validate($request,[
            'password'=>'min:8|confirmed',
        ]);
        $admin = Admin::findorFail($id);

        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect('admin/password/'.$id)->with('status','Password Reset Successful.');
    }
    public function delete($id){
        Admin::findorFail($id)->delete();
        return redirect('admin/show')->with('status','Admin Deleted');
    }
}
