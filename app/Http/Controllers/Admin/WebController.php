<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Web;
use App\model\Link;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function web(){
        $web = Web::where('id',1)->first();
        return view('admin.web.about',['web'=>$web]);
    }
    public function update(Request $request){
        // return "hello";
        $this->validate($request,[
            'tel_no'=>'required',
            'mobile'=>'required',
            'email'=>'email|required'
        ]);
        $data = Web::all();
        // return count($data);
        if(count($data)==0){
            Web::create([
                'tel_no'=>$request->tel_no,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'iframe'=>$request->iframe,
            ]);
            return redirect('/admin/web/about')->with('status','Web Details created.');
        }
        else{
            $web = Web::findorFail(1);
            // DB::table('webs')->where('id',1)->update(['tel_no'=>$request->tel_no,'mobile'=>$request->mobile,'email'=>$request->tel_no]);
            $web->tel_no = $request->tel_no;
            $web->mobile = $request->mobile;
            $web->email = $request->email;
            $web->iframe = $request->iframe;
            $web->save();
            return redirect('/admin/web/about')->with('status','Web Details updated.');
        }
    }
    public function footer(){
        $link = Link::where('id',1)->first();
        return view('admin.web.footer',['link'=>$link]);
    }
    public function footerUpdate(Request $request){
        if(empty($request->facebook)&&empty($request->instagram) && empty($request->youtube) &&empty($request->whatsapp)){
            return redirect('/admin/web/footer')->with('message','All fields can not be empty.');
        }
       $link = Link::all();
       if(count($link)==0){
        Link::create([
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'youtube'=>$request->youtube,
            'whatsapp'=>$request->whatsapp,
        ]);
        return redirect('/admin/web/footer')->with('status','Footer Details Added.');
       }
       else{
        $link = Link::findorFail(1);
            
        $link->facebook = $request->facebook;
        $link->instagram = $request->instagram;
        $link->youtube = $request->youtube;
        $link->whatsapp = $request->whatsapp;
        $link->save();
        return redirect('/admin/web/footer')->with('status','Footer Details Updated.');
       }
    }
}
