<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Hostel;
use App\model\Room;
use App\model\Hostelimage;
use App\model\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $this->validate($request,[
            'city'=>'nullable|string',
            'type'=>'nullable|integer'
        ]);
        $city = $request->type;
        $city = $request->city;
        $all = Hostel::select('city')->distinct()->get();
        if(!empty($city) && !empty($type)){
            $hostels = Hostel::where('type',$request->type)->where('city',$request->city)->get();
            foreach($hostels as $boy){
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
        }elseif(!empty($city) && empty($type)){
            $hostels = Hostel::where('city',$request->city)->get();
            foreach($hostels as $boy){
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
        }elseif(empty($city) && !empty($type)){
            $hostels = Hostel::where('city',$request->city)->get();
            foreach($hostels as $boy){
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
        }else{
            $hostels = Hostel::all();
            foreach($hostels as $boy){
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
        }
         if(empty($list)){
            $list = [];
        }
        return view('user.hostels.search',['hostels'=>$list,'all'=>$all,'city'=>$city]);
    } 

}
