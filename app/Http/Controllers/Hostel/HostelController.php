<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Hostel;
use App\model\Room;
use App\model\Hostelimage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HostelController extends Controller
{
    public function index()
    {
        $hostels = Hostel::all();
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
        return view('user.home.home',['boys'=>$list,'girls'=>$girlList,'hostels'=>$hostels]);
    }
    public function hostel(){
        return view('user.hostels.hostels');
    }
    public function booking(){
        return view('user.booking.booking');
    }
    public function details($id){
        $hostel = Hostel::findorFail($id);
        $id = explode('::',$hostel->id);
        $rooms = Room::where('hostel_id',$id)->first();
        $images = Hostelimage::where('hostel_id',$id)->get();
        if(!empty($rooms)){
        $price_room = explode('::',$rooms->price);
        $price = implode('',$price_room);
        $room_type = explode('::',$rooms->room_type);
        $room = implode('',$room_type);
        }else{
            $price = null;
            $room = null;
        }
        $list = array(
            'id'=>$hostel->id,
            'name'=>$hostel->name,
            'city'=>$hostel->city,
            'municipality'=>$hostel->municipality,
            'ward'=>$hostel->ward,
            'price'=>$price,
            'room'=>$room,
            'description'=>$hostel->description,

        ); 
// return $list;        
        return view('user.booking.bookingDetails',['hostel'=>$list,'images'=>$images]);
    }
    public function search(Request $request){
        $this->validate($request,[
            'city'=>'nullable|string',
            'type'=>'nullable|integer'
        ]);
        $city = $request->type;
        $city = $request->city;
        $all = Hostel::all();  
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
        // return $list;
        return view('user.hostels.search',['hostels'=>$list,'all'=>$all,'city'=>$city]);
    } 

    public function book($id,$idd){
       $rooms = Room::where('hostel_id',$id)->where('room_type',$idd)->where('status',0)->pluck('room_no','price');
       return json_encode($rooms);

    }
    public function roomPrice($id,$idd){
        $rooms = Room::where('hostel_id',$id)->where('room_no',$idd)->pluck('price');
        return json_encode($rooms);
    }
    public function roomBook($id,Request $request){
        $this->validate($request,[
            'date'=>'date_format:Y-m-d|after_or_equal:today'
        ]);
        return Auth::user()->id;
    }
}
