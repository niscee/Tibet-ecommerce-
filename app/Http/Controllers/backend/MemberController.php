<?php

namespace App\Http\Controllers\backend;
use App\Model\Membership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class MemberController extends Controller
{
    public function index(){

        $datas = Membership::Orderby('id','desc')->paginate(5);
        return view('backend.pages.member.add',compact('datas'));
    }


    public function add(Request $request){

        try{
            $this->validate($request,[

                'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            ]);


            $datas = new Membership;
            $datas->url = $request->url;

            if(Input::hasFile('image')){
                $file = Input::File('image');
                $file -> move(public_path().'/frontend/image/member/',$file->getClientOriginalName());
                $datas->image = $file->getClientOriginalName();
            }
            $datas->save();
            return redirect()->back()->with('success','Added Succesfully!!!');
        }
        catch(Exeption $e){
            return redirect()->back()->with('error',$e);
        }

    }


    public function delete(Request $request){

             $id = (int)$request->id;
             $datas = Membership::find($id);
             $datas->delete();
             return redirect()->back()->with('success','Succesfully Deleted');
    }


}
