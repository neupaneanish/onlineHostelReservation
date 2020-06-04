<?php

namespace App\Http\Controllers\Admin;
use App\model\Hostel;
use App\model\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\model\Hostelimage;

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
        // return request()->image;
        $this->validate($request, [
            'image' => 'nullable|mimes:jpeg,png,jpg,svg|image|max:2048'
    ]);
    //    return request()->image;
    if(empty(request()->image)){
        $name = null;
    }else{
    $file = request()->image;
    $name = time().'.'.request()->image->getClientOriginalExtension();
    $file->move(public_path().'/uploads/', $name);
}
        Hostel::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'municipality' => $request->municipality,
            'ward' => $request->ward,
            'phone' => $request->phone,
            'contact' => $request->contact,
            'type' => $request->type,
            'description'=>$request->desc,
            'image' => $name,   
            'totalRoom' => $request->room,
        ]);
        $hostel = Hostel::where('email',$request->email)->first();
       $id = explode('::',$hostel->id);
        $hostelid = implode('',$id);
        // return $hostelid;
        Hostelimage::create([
            'hostel_id'=>$hostelid,
            'image'=>$name,
            'type' => 0
        ]);
        // return view('admin.rooms.')
        return redirect('/admin/hostel/room/'.$hostelid);
    }
    public function editForm($id){
        $hostels = Hostel::findorFail($id);
        // return $hostel;
        return view('admin.hostel.editHostel',['hostels'=>$hostels]);
    }
   
    public function update(Request $request,$id){
        $this->validate($request, [
            'image' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:2048'
    ]);
        $hostel = Hostel::findorFail($id);

        $hostel->name = $request->name;
        $hostel->email = $request->email;
        $hostel->city = $request->city;
        $hostel->municipality = $request->municipality;
        $hostel->ward = $request->ward;
        $hostel->phone = $request->phone;
        $hostel->contact = $request->contact;
        $hostel->type = $request->type;
        $hostel->description = $request->desc;
        if(!empty(request()->image)){
            $file = request()->image;
            $name = time().'.'.request()->image->getClientOriginalExtension();
            $file->move(public_path().'/uploads/', $name);
            $hostel->image = $name;
            Hostelimage::create([
                'hostel_id'=>$id,
                'image'=>$name,
                'type' => 0
            ]);
        }
        $hostel->totalRoom = $request->room;
        $hostel->save(); 

        return redirect('/admin')->with('status','Hostel details has been Updated.');  

    }
    public function delete($id){
        Hostel::findorFail($id)->delete();
        Room::where('hostel_id',$id)->delete();
       $images = Hostelimage::where('hostel_id',$id);
       foreach($images as $image){
        $img = explode('::',$image->image);
        $name = implode('',$img);
        $path = public_path().'/uploads/'.$name;
        @unlink($path);
       }
       Hostelimage::where('hostel_id',$id)->delete();
       return redirect('/admin')->with('status','Hostel has been deleted.');
    }
    public function detail($id){
        $hostel = Hostel::findorFail($id);
        return view('admin.hostel.hostelDetails',['hostel'=>$hostel]);
    }
}
