<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}
