<?php

namespace App\Http\Controllers\backend;
use App\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index(){
        $datas = Menu::Orderby('id','desc')->get();
        return view('backend.pages.menu.add',compact('datas'));
    }


    public function edit(Request $request){
        $id = (int)$request->id;
        $datas = Menu::find($id);

        $datas->About = $request->about;
        $datas->social = $request->social;
        $datas->customproduct = $request->customproduct;
        $datas->save();

        return redirect()->back()->with('success','Succesfully Updated!!!!');
    }
}
