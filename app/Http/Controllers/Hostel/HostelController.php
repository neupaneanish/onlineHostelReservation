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
class HostelController extends Controller
{
    public function index()
    {
        $hostels = Hostel::select('city')->distinct()->get();
        
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
        if(empty($list)){
            $list=[];
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
        if(empty($girlList)){
            $girlList=[];
        }
    //    return $list;
        return view('user.home.home',['boys'=>$list,'girls'=>$girlList,'hostels'=>$hostels]);
   
        
    }
    public function hostel(){
        $all = Hostel::select('city')->distinct()->get();
        
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
            if(empty($list)){
                $list = [];
            }
            // return view('user.hostels.search',['hostels'=>$list,'all'=>$all,'city'=>$city]);
        return view('user.hostels.hostels',['hostels'=>$list,'all'=>$all]);
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
   
    public function book($id,$idd){
        $rooms = DB::table('rooms')->where('hostel_id',$id)->where('room_type',$idd)->where('status',0)->pluck('price','room_no')->all();
    //    $rooms = Room::where('hostel_id',$id)->where('room_type',$idd)->where('status',0)->get('room_no','price');
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
        $room = Room::where('hostel_id',$id)->where('room_no',$request->room_no)->first();
        $roomId = explode("::",$room->id);
        $room_id = implode('',$roomId);
        $priceR = explode('::',$room->price); 
        $price = implode('',$priceR);
        if($request->duration=='days'){
            $period = $request->period/30; 
        }elseif($request->duration=='year'){
            $period = $request->period*12; 
        }else{
            $period = $request->period;
        }
        $totalPeriod = $request->period." ".$request->duration;
        Booking::create([
            'user_id'=>Auth::user()->id,
            'hostel_id'=> $id,
            'room_id'=>$room_id,
            'status'=>'0',
            'price'=>$price*$period,
            'arrival_date'=>$request->date,
            'duration'=>$totalPeriod,
        ]);
        Room::where('id',$room_id)->update(['status'=>1]);
        return redirect('/hostel/detail/'.$id)->with('status','Hostel Room Booked');
    }
    public function bookingDetails($id){
        // $books = Booking::where('user_id',$id)->get();
 $books =      DB::table('bookings')
        ->join('hostels','bookings.hostel_id','hostels.id')
        ->join('rooms','bookings.room_id','rooms.id')
        ->select('bookings.id','bookings.user_id','bookings.hostel_id','bookings.price','bookings.arrival_date','bookings.duration','hostels.name','rooms.room_no','rooms.room_type','hostels.city','hostels.ward','hostels.municipality','hostels.image','bookings.created_at','bookings.status')
        ->where('bookings.user_id',$id)
        ->get();
        // return $books;
        return view('user.booking.booking',['books'=>$books]);
    }
    public function editBooking($id){
        // return "hello";
        $booking = Booking::findorFail($id);
        $hostel_id = explode('::',$booking->hostel_id);
        $du = explode('::',$booking->duration);
        $dura = implode('',$du);
        $tio = explode(' ',$dura);
        $duration = $tio[1];
        $period = $tio[0];
        $hostel = Hostel::where('id',$hostel_id)->first();
        
        $room_id = explode('::',$booking->room_id);
        $room_no = Room::where('id',$room_id)->first();
        $images = Hostelimage::where('hostel_id',$hostel_id)->get();
        $list = array(
            'id'=>$hostel->id,
            'name'=>$hostel->name,
            'city'=>$hostel->city,
            'municipality'=>$hostel->municipality,
            'ward'=>$hostel->ward,
            'type'=>$room_no->room_type,
            'price'=>$booking->price,
            'room_no'=>$room_no->room_no,
            'description'=>$hostel->description,
            'arrival_date'=>$booking->arrival_date,
            'duration'=>$duration,
            'period'=>$period,
            'booking_id'=>$booking->id

        ); 
// return $list;        
        return view('user.booking.bookingEdit',['hostel'=>$list,'images'=>$images]);
        // return view('user.booking.bookingEdit');
    }
    public function editBook($id,Request $request){
        $this->validate($request,[
            'date'=>'date_format:Y-m-d|after_or_equal:today'
        ]);
        $booking = Booking::findorFail($id);
       
        $roomId = explode("::",$booking->room_id);
        $room = Room::where('id',$roomId)->first();
        $room_id = implode('',$roomId);
        $priceR = explode('::',$room->price); 
        $price = implode('',$priceR);
        if($request->duration=='days'){
            $period = $request->period/30; 
        }elseif($request->duration=='year'){
            $period = $request->period*12; 
        }else{
            $period = $request->period;
        }
        $totalPeriod = $request->period." ".$request->duration;

        $booking->user_id = Auth::user()->id;
        $booking->hostel_id = $request->hostel_id;
        $booking->room_id = $room_id;
        $booking->price = $price*$period;
        $booking->duration = $totalPeriod;
        $booking->arrival_date = $request->date;
        $booking->save();


        Room::where('hostel_id',$request->hostel_id)->where('room_no',$request->room_no)->update(['status'=>1]);
        Room::where('id',$room_id)->update(['status'=>0]);
// return $room_id; 
        return redirect('/hostel/detail/'.$request->hostel_id)->with('status','Hostel Room Booked');
    }
    public function aboutUs(){
        return view('user.aboutus.aboutus');
    }
    public function cancelled($id){
        // return $id;
        $booking = Booking::findorFail($id);
        // return $booking;
        $room_id= explode('::',$booking->room_id);
        $user_id = explode('::',$booking->user_id);
        $user = implode('',$user_id);
        Booking::where('id',$id)->update(['status'=>1]);
        Room::where('id',$room_id)->update(['status'=>0]);
        return redirect('hostel/booking/details/'.$user)->with('status','Booking Cancelled');
    }
    public function gotoLogin(){
        return view('user.booking.noBooking');
    }
}
