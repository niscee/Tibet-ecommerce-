<?php

namespace App\Http\Controllers\backend;

use App\Model\Pmenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PmenuController extends Controller
{
    public function add(Request $request){

               $this->validate($request,[

                  'category_id' => 'integer',

               ]);

               $datas = new Pmenu;
               $datas->category_id = $request->category_id;
               $datas->pmenu = $request->pmenu;
               $datas->slug = $request->slug;
               $datas->save();

               return redirect()->back()->with('success',"Successfully Added!!!");

    }



    public function find(Request $request){

        $id = (int)$request->id;
        $datas = Pmenu::where('category_id',$id)->get();
        return response()->json($datas);


    }



}
