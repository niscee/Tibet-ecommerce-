<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
class SliderController extends Controller
{
    public function index(){
        $imgs = Slider::all();
        return view('backend.pages.slider.add',compact('imgs'));
    }

    public function add(Request $request){

        $this->validate($request, [

            'image' => 'required|max:2048',

            ]);



            if ($request->hasFile('image')) {

                foreach ($request->image as $file) {

                    $filename = $file->getClientOriginalName();
                    $file->storeAs('public/frontend/image/slider/', $filename);
                    $file->move(public_path() .'/frontend/image/slider/', $file->getClientOriginalName());

                    $sliders = new Slider;
                    $sliders->image = $filename;
                    $sliders->save();
                }

                return redirect()->back()->with('success', 'Succesfully Added!!!');

            }


    }

    public function delete(Request $request){

        $id = (int)$request->id;
        $datas = Slider::find($id);
        $datas->delete();
        return redirect()->back()->with('success','Succesfully Deleted!!!');

    }




}
