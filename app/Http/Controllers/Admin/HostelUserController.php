<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index(){
        $user = []; 
        return view('admin.user.listUser',['users'=>$user]);
    }

}
