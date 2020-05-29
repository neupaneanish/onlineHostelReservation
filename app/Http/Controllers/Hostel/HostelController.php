<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Hostel;
use App\model\Room;
use Illuminate\Support\Facades\DB;
class HostelController extends Controller
{
    public function index()
    {
        $boys = Hostel::where('type',0)->get();
        foreach($boys as $boy){
            $id = explode('::',$boy->id);
            $rooms = Room::where('hostel_id',$id)->first();
            if(!empty($rooms)){
            $price_room = explode('::',$rooms->price);
            $price = implode('',$price_room);
            $room_type = explode('::',$rooms->room_type);
            $room = implode('',$room_type);
            }else{
                $price = null;
                $room = null;
            }
            $list[] = array(
                'id'=>$boy->id,
                'name'=>$boy->name,
                'city'=>$boy->city,
                'municipality'=>$boy->municipality,
                'ward'=>$boy->ward,
                'price'=>$price,
                'room'=>$room,
                'image'=>$boy->image,
            ); 
            
        }

        $girls = Hostel::where('type',1)->get();
        foreach($girls as $boy){
            $id = explode('::',$boy->id);
            $rooms = Room::where('hostel_id',$id)->first();
            if(!empty($rooms)){
            $price_room = explode('::',$rooms->price);
            $price = implode('',$price_room);
            $room_type = explode('::',$rooms->room_type);
            $room = implode('',$room_type);
            }else{
                $price = null;
                $room = null;
            }
            $girlList[] = array(
                'id'=>$boy->id,
                'name'=>$boy->name,
                'city'=>$boy->city,
                'municipality'=>$boy->municipality,
                'ward'=>$boy->ward,
                'price'=>$price,
                'room'=>$room,
                'image'=>$boy->image,
            ); 
            
        }
        return view('user.home.home',['boys'=>$list,'girls'=>$girlList]);
    }
    public function hostel(){
        return view('user.hostels.hostels');
    }
    public function booking(){
        return view('user.booking.booking');
    }
}
