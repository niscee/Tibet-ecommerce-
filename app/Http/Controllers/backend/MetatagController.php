<?php

namespace App\Http\Controllers\backend;
use App\Model\Metatag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetatagController extends Controller
{
    public function index(){

        $datas = Metatag::Orderby('id','desc')->first();
         return view('backend.pages.metatag.add',compact('datas'));
    }

    public function add(Request $request){

        $id = (int)$request->id;
        $datas = Metatag::find($id);
        $datas->author = $request->author;
        $datas->description = $request->description;
        $datas->title = $request->title;
        $datas->keywords = $request->keywords;
        $datas->save();

        return redirect()->back()->with('success','Updated Succesfully!!!!!');
    }


}
