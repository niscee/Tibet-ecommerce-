<?php

namespace App\Http\Controllers\backend;
use App\Model\Associate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateController extends Controller
{
    public function index(){

        $datas = Associate::Orderby('id','desc')->first();
        return view('backend.pages.associate.add',compact('datas'));
    }

    public function edit(Request $request){

        $this->validate($request,[
            'phone'=>'required|digits:7',
            'phone2'=>'required|digits:10',

        ]);

        $id = (int)$request->id;
        $datas = Associate::find($id);
        $datas->cname = $request->cname;
        $datas->address = $request->address;
        $datas->phone = $request->phone;
        $datas->phone2 = $request->phone2;
        $datas->email = $request->email;
        $datas->website = $request->website;
        $datas->save();


      return redirect()->back()->with('success',"Succesfully Updated");


    }

}
