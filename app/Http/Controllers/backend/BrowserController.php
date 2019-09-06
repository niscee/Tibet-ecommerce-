<?php

namespace App\Http\Controllers\backend;
use App\Model\Special;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class BrowserController extends Controller
{
    public function index(){
        $datas = Special::Orderby('id','desc')->first();
        return view('backend.pages.browser.add',compact('datas'));
    }


    public function add1(Request $request){

        $this->validate($request,[
            'image1' => 'required|max:2048|mimes:jpeg,jpg,png',
        ]);




            $datas = new Special;
            $datas->url1 = $request->url1;

            if(Input::hasFile('image1')){

                $file = Input::File('image1');
                $file->move(public_path().'/frontend/image/browser/',$file->getClientOriginalName());
                $datas->title1 = $file->getClientOriginalName();
                $datas->save();
            }

            return redirect()->back()->with('success','Succesfully Added!!!');




    }






    public function add2(Request $request){

        $this->validate($request,[
            'image2' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);


             $id  =  (int)$request->id;
             $datas = Special::find($id);
             $datas->url2 = $request->url2;

            if(Input::hasFile('image2')){

                $file = Input::File('image2');
                $file->move(public_path().'/frontend/image/browser/',$file->getClientOriginalName());
                $datas->title2 = $file->getClientOriginalName();
                $datas->save();
            }

            return redirect()->back()->with('success','Succesfully Added!!!');

    }


    public function add3(Request $request){

        $this->validate($request,[
            'image3' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);


        $id  =  (int)$request->id;
        $datas = Special::find($id);
        $datas->url3 = $request->url3;

        if(Input::hasFile('image3')){

            $file = Input::File('image3');
            $file->move(public_path().'/frontend/image/browser/',$file->getClientOriginalName());
            $datas->title3 = $file->getClientOriginalName();
            $datas->save();
        }

        return redirect()->back()->with('success','Succesfully Added!!!');

    }




    public function add4(Request $request){

        $this->validate($request,[
            'image4' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);


        $id  =  (int)$request->id;
        $datas = Special::find($id);
        $datas->url4 = $request->url4;

        if(Input::hasFile('image4')){

            $file = Input::File('image4');
            $file->move(public_path().'/frontend/image/browser/',$file->getClientOriginalName());
            $datas->title4 = $file->getClientOriginalName();
            $datas->save();
        }

        return redirect()->back()->with('success','Succesfully Added!!!');

    }






/*
    public function delete(Request $request){
      $id = (int)$request->id;
      $datas = Browser::find($id);
      $datas->delete();
      return redirect()->back()->with('success','Deleted Succesfully!!!!');
    }

    public function edit(Request $request){
        $id = (int)$request->id;
        $datas = Browser::find($id);

        $datas->url = $request->url;
        $datas->save();
        return redirect()->back()->with('success','Deleted Succesfully!!!!');
    }*/

}
