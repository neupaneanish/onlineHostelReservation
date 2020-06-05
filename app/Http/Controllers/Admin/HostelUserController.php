<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\User;
use App\model\Hostel;
use App\model\Booking;
use Illuminate\Support\Facades\DB;

class HostelUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index(){
        $users = User::all();
        // return $users;
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
    public function booking(){
      $bookings = DB::table('bookings')
      ->join('hostels','bookings.hostel_id','hostels.id')
      ->join('rooms','bookings.room_id','rooms.id')
      ->join('users','bookings.user_id','users.id')
      ->select('bookings.id','bookings.user_id','users.mobile','bookings.hostel_id','bookings.price','bookings.arrival_date','bookings.duration','hostels.name','rooms.room_no','rooms.room_type','hostels.city','hostels.ward','hostels.municipality','hostels.image','bookings.created_at','bookings.status','users.email','users.name as fullname')
      ->orderBy('bookings.updated_at','DESC')
      ->get();
      Booking::where('is_read','0')->update(['is_read'=>1]);
    //   return $bookings;
      return view('admin.adminBooking.listBooking',['bookings'=>$bookings]);
    }

}
