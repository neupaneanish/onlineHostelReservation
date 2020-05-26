<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\users\Hostelimage;
use App\users\Hostel;

class ImageController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function image(){
        $hostels = Hostel::all();
        return view('admin.hostel.manageImage',['hostels'=>$hostels]);
    }
    public function imageAddForm( $id){
        $hostel = Hostel::findorFail($id);
        return view('admin.images.editImage',['hostel'=>$hostel]);
    }

    public function imageUpload(Request $request){
        // return $request->file('image');
        $this->validate($request, [
            'image' =>'required',
            'image.*' => 'mimes:jpeg,png,jpg|max:2048'
    ]);

    $images = array();
    if($request->hasfile('image')) {
        foreach($request->file('image') as $file) {
            $name = rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/', $name);  
            $data[] = $name; 
            Hostelimage::create([
                    'hostel_id'=>$request->id,
                    'image' => $name
                    ]);
            }
            
        
        return redirect('admin/hostel/viewImage');
    }
}
public function displayImage($id){
    $images = Hostelimage::where('hostel_id',$id)->get();
    $name = Hostel::findorFail($id);
// return $nmae;
return view('admin.images.viewImage',['images'=>$images,'name'=>$name]);
}
}
