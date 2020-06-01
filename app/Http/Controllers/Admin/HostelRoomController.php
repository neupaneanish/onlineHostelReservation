<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Room;
use App\model\Hostel;
use Illuminate\Support\Facades\DB;

class HostelRoomController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function roomAddForm($id){
        $hostel = Hostel::findorFail($id);
        return view('admin.rooms.hostelRoom',['hostel'=>$hostel]);
    }
    public function roomAdd(Request $request,$id){
        $this->validate($request,[
            'room_no'=>'required',
            'room_type'=>'required|integer',
            'price'=>'required|integer',
        ]);
            $room = Room::where('hostel_id',$id)->where('room_no',$request->room_no)->get();
            if(count($room)==1){
                return "already taken";
            }
        Room::create([
            'hostel_id'=>$id,
            'room_no'=>$request->room_no,
            'room_type'=>$request->room_type,
            'price'=>$request->price,
            'status'=>0,
        ]);
        return redirect('/admin/hostel/room/view/'.$id)->with('status','Room added successfully');

    }
    public function roomShow($id){
        if(Hostel::findorFail($id)){
        $rooms = Room::where('hostel_id',$id)->get();
        return view('admin.rooms.roomView',['rooms'=>$rooms]);
        }
    }
    public function details($id){
        $r = Room::findorFail($id);
        if($r){
       $room =  DB::table('rooms')
        ->join('hostels','rooms.hostel_id','hostels.id')
        ->select('hostels.id as hostel','hostels.name','rooms.id as roomId','rooms.room_no','rooms.room_type','rooms.price','hostels.image')
        ->where('rooms.id',$id)
        ->get();
        return view('admin.rooms.roomDetails',['rooms'=>$room]);
        }
    }
    public function deleteRoom($id){
        Room::findorFail($id)->delete();
        return redirect('/admin/room/view/detail/'.$id)->with('status','Room Deleted');
    }
    public function roomEditForm($id){
        $room=Room::findorFail($id);
        $hostelid= explode('::',$room->hostel_id);
        $hostel = Hostel::where('id',$hostelid)->first();
        return view('admin.rooms.edit',['room'=>$room,'hostel'=>$hostel]);
    }
    public function roomEdit(Request $request,$id){
       $room = Room::findorFail($id);

       $room->room_no = $request->room_no;
       $room->room_type = $request->room_type;
       $room->price = $request->price;

       $room->save();
       return redirect('admin/room/view/detail/'.$id)->with('status','Room Updated');

    }
}
