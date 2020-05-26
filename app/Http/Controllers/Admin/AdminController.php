<?php

namespace App\Http\Controllers\Admin;
use App\users\Hostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function hostelAdd(){
        return view('admin.hostel.hostel');
    }
    
    public function list(){
        // $hostels = DB::table('hostels')->paginate(15);
        $hostels = Hostel::all();
        return view('admin.hostel.hostelList',['hostels'=>$hostels]);
    }
    public function create(Request $request){
    //    return $request->contact;
        Hostel::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'municipality' => $request->municipality,
            'ward' => $request->ward,
            'phone' => $request->phone,
            'contact' => $request->contact,
            'type' => $request->type,
            'totalRoom' => $request->room,
        ]);
        return redirect('/admin');
    }
    public function editForm($id){
        $hostels = Hostel::findorFail($id);
        // return $hostel;
        return view('admin.hostel.editHostel',['hostels'=>$hostels]);
    }
    public function search(Request $request){
        // $this->validate($request,[]);
        $city = $request->type;
        $city = $request->city;
        if(!empty($city) && !empty($type)){
            $hostels = Hostel::where('type',$request->type)->where('city',$request->city)->get();
        }elseif(!empty($city) && empty($type)){
            $hostels = Hostel::where('city',$request->city)->get();
        }elseif(empty($city) && !empty($type)){
            $hostels = Hostel::where('city',$request->city)->get();
        }else{
            $hostels = Hostel::all();
        }
        return view('',['hostels'=>$hostels]);

    } 
}
