<?php

namespace App\Http\Controllers\backend;
use App\Model\Subscribe;
use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    public function index(){

        $datas = Subscribe::Orderby('id','desc')->get();
        return view('backend.pages.subscribe.add',compact('datas'));
    }

    public function delete(Request $request){

        $id = (int)$request->id;
        $datas = Subscribe::find($id);
       $datas->delete();
       return redirect()->back()->with('success',"Deleted Succesfully!!!");
    }



}
