<?php

namespace App\Http\Controllers\backend;
use App\Model\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{

      public function index(){

          $datas = Information::Orderby('id','desc')->paginate(3);
          return view('backend.pages.information.add',compact('datas'));
      }


    public function add(Request $request){
       $this->validate($request,[

               'title' =>'required|unique:information,title',

       ]);

       try{

           $datas = new Information;
           $datas->title = $request->title;
           $datas->detail = $request->detail;
           $datas->slug = $request->slug;
           $datas->save();

           return redirect()->back()->with('success','Added Succesfully!!');

       }
       catch(Exception $e){
           return redirect()->back()->with('success',$e);
       }

    }


    public function edit(Request $request){

        $id = (int)$request->id;
        $datas = Information::find($id);
        $da = Information::Orderby('id','desc')->paginate(4)->except($id);
        return view('backend.pages.information.edit',compact('datas','da'));
    }




    public function editaction(Request $request){
         $this->validate($request,[

             /*'title' =>'required|unique:information,title',*/

         ]);

         try{

             $id = (int)$request->id;
             $datas = Information::find($id);
             $datas->title = $request->title;
             $datas->detail = $request->detail;
             $datas->slug = $request->slug;
             $datas->save();

             return redirect()->back()->with('success','Added Succesfully!!');

         }
         catch(Exception $e){
             return redirect()->back()->with('success',$e);
         }

     }

     public function delete(Request $request){

         $id = (int)$request->id;
         $datas = Information::find($id);
         $datas->delete();
         return redirect()->back()->with('success','Succesfully Deleted!!!');
     }



}
