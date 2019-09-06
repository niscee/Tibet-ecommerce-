<?php

namespace App\Http\Controllers\backend;
use App\Model\Siteconfig;
use App\Model\Logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SiteController extends Controller
{

     public function index(){

         $datas = Siteconfig::all();
         $logos = Logo::all();
         return view('backend.pages.site.add',compact('datas','logos'));
     }

    public function add(Request $request){

          $this->validate($request,[
              'phone' => 'numeric|digits:10',
          ]);

        try{
             $id = (int)$request->id;
             $datas = Siteconfig::find($id);

             $datas->cname = $request->cname;
             $datas->address = $request->address;
             $datas->phone = $request->phone;
             $datas->emailone = $request->emailone;
             $datas->emailtwo = $request->emailtwo;
             $datas->fblink = $request->fblink;
             $datas->utubelink = $request->utubelink;
             $datas->instalink = $request->instalink;
             $datas->twitterlink = $request->twitterlink;
             $datas->googlelink = $request->googlelink;
            $datas->slogan = $request->slogan;

             $datas->save();
             return redirect()->back()->with('success','Succesfully Updated');

         }
         catch(Exception $e){
            return redirect()->back()->with('error',$e);
        }

    }

    public function logo(Request $request){

        $this->validate($request,[

            'logo' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $id = (int)$request->id;
        $logos = Logo::find($id);
        if(Input::hasFile('logo')){
             $file = Input::File('logo');
             $filename = time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path().'/frontend/image/logo/',$filename);
             $logos->logo = $filename;

        }
        $logos->save();
        return redirect()->back()->with('success','Successfully Updated!!!');
    }



}
