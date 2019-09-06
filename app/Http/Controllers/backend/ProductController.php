<?php

namespace App\Http\Controllers\backend;
use App\Model\Category;
use App\Model\Pimage;
use App\Model\Pmenu;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){

        $cats = Category::Orderby('id','desc')->paginate(4);
        $categorys = Category::Orderby('id','desc')->get();
        $subcata = Pmenu::Orderby('id','desc')->get();
        return view('backend.pages.product.add',compact('cats','categorys','subcata'));
    }

    public function category(Request $request){

        $this->validate($request,[
           'category' => 'required|unique:categories',
        ]);
      try{

          $datas = new Category;
          $datas->category = ucwords($request->category);
          $datas->slug = $request->slug;
          $datas->save();

          return redirect()->back()->with('success','Added Succesfully!!!');
        }
      catch(Exception $e){

          return redirect()->back()->with('error',$e);
       }

    }

    public function categorydelete(Request $request){

        $id = (int)$request->id;
        $pros = Product::where('category_id',$id)->get();

        if(!$pros->isEmpty() ){

            return redirect()->back()->with('error','Product related to this Category Still Exist!!!!');
        }else{

            $pros = Category::find($id);
            $pros->delete();
            return redirect()->back()->with('success','Succesfully Deleted!!!');

        }

    }


    public function pmenudelete(Request $request){

        $id = (int)$request->id;
        $pros = Product::where('pmenu_id',$id)->get();

        if(!$pros->isEmpty() ){

            return redirect()->back()->with('error','Product related to this Category Still Exist!!!!');
        }
        else
            {

            $pros = Pmenu::find($id);
            $pros->delete();
            return redirect()->back()->with('success','Succesfully Deleted!!!');

        }

    }




    public function productadd(Request $request){

         $this->validate($request,[
             'promain' => 'required|mimes:jpeg,jpg,png|max:2048',
             'product_name' => 'unique:products,proname',
             'proextra' =>'max:2048',
             'procode' =>'required',

         ]);

         $datas = new Product;

         if($request->cat_id != 0){

             $datas->category_id = $request->cat_id;
             $datas->proname = $request->product_name;
             $datas->pmenu_id = $request->pmenu_id;
             $datas->slug = $request->slug;
             $datas->procode = $request->procode;
             $datas->protype = $request->protype;
             $datas->video = $request->video;
             $datas->proav = $request->proav;
             $datas->rating = $request->rating;
             $datas->description = $request->description;
             if(Input::hasFile('promain')){

                 $file = Input::File('promain');
                 $file->move(public_path().'/frontend/image/product/',$file->getClientOriginalName());
                 $datas->promain = $file->getClientOriginalName();
                 $datas->save();
             }



               if($request->hasFile('proextra')){

                   foreach($request->proextra as $file){

                        $filename = $file->getClientOriginalName();
                        $file -> storeAs('/frontend/image/product/',$filename);
                        $file->move(public_path().'/frontend/image/product/',$filename);
                        $proimage = new Pimage;
                        $proimage->proextra = $filename;
                        $proimage->product_id = $datas['id'];
                        $proimage->save();
                   }

                   return redirect()->back()->with('success','Succesfully Added!!!');

               }

         }
         else{
             return redirect()->back()->with('error','Please Choose Category!!!');
         }
    }



    public function productview(){

        $cats = Category::Orderby('id','desc')->get();
        $pros = Product::Orderby('id','desc')->paginate(5);
        return view('backend.pages.product.view',compact('cats','pros'));
    }

    public function psearch(Request $request){

        $id = (int)$request->cat_id;
        if($id != 0){
            $cats = Category::Orderby('id','desc')->get();
            $pros = Product::where('category_id',$id)->paginate(5);
            return view('backend.pages.product.view',compact('cats','pros'));
        }
        else
            {
            $cats = Category::Orderby('id','desc')->get();
            $pros = Product::Orderby('id','desc')->paginate(5);
            return view('backend.pages.product.view',compact('cats','pros'))->with('error','Sorry No Data!!');
        }

    }


    public function productdelete(Request $request){

        $id = (int)$request->id;
        $datas = Product::find($id);
        $datas->delete();
        $cats = Category::Orderby('id','desc')->get();
        $pros = Product::Orderby('id','desc')->paginate(5);
        return view('backend.pages.product.view',compact('cats','pros'));
    }

    public function productedit(Request $request){

        $id = (int)$request->id;
        $datas = Product::find($id);


        $pm_id = $datas['pmenu_id'];
        $pmenu = Pmenu::where('id',$pm_id)->first();

        $c_id = $datas['category_id'];
        $categorys = Category::find($c_id);
        $cats = Category::Orderby('id','desc')->get()->except($c_id);
        $subcata = Pmenu::Orderby('id','desc')->get();
        return view('backend.pages.product.edit',compact('cats','datas','categorys','subcata','pmenu'));
    }

    public function menuedit(Request $request){

        $id = (int)$request->id;
        $datas = Category::find($id);
        return view('backend.pages.product.menuedit',compact('datas'));
    }


    public function pmenuedit(Request $request){


        $id = (int)$request->id;
        $datas = Pmenu::find($id);
        $categorys = Category::all();
        return view('backend.pages.product.submenuedit',compact('datas','categorys'));
    }


    public function menueditaction(Request $request){

        $id = (int)$request->id;
        $datas = Category::find($id);
        $datas->category = ucwords($request->category);
        $datas->slug = $request->slug;
        $datas->save();
        return redirect('dashboard/Product');
    }

    public function pmenueditaction(Request $request){

        $id = (int)$request->id;
        $datas = Pmenu::find($id);
        $datas->category_id = $request->category_id;
        $datas->pmenu = $request->pmenu;
        $datas->slug = $request->slug;
        $datas->save();
        return redirect('dashboard/Product');
    }

    public function productimagedelete(Request $request){

             $id = (int)$request->id;
             $pros = Pimage::find($id);
             $pros->delete();
             return redirect()->back()->with('success','Succesfully Deleted!!!');
    }


    public function producteditaction(Request $request){

        $id = (int)$request->id;
        $datas = Product::find($id);

        $this->validate($request,[
            'promain' => 'mimes:jpeg,jpg,png|max:2048',
            'price' => 'numeric',
            'product_name' => 'unique:products,proname'.$datas->id,
            'proextra' =>'max:2048',
            'procode' =>'required',
        ]);



        if($request->cat_id != 0){

            $datas->category_id = $request->cat_id;
            $datas->pmenu_id = $request->pmenu_id;
            $datas->proname = $request->proname;
            $datas->slug = $request->slug;
            $datas->procode = $request->procode;
            $datas->protype = $request->protype;
            $datas->video = $request->video;
            $datas->proav = $request->proav;
            $datas->rating = $request->rating;
            $datas->description = $request->description;
            $datas->save();

            if(Input::hasFile('promain')){

                $file = Input::File('promain');
                $file->move(public_path().'/frontend/image/product/',$file->getClientOriginalName());
                $datas->promain = $file->getClientOriginalName();
                $datas->save();
            }



            if($request->hasFile('proextra')){

                foreach($request->proextra as $file){

                    $filename = $file->getClientOriginalName();
                    $file -> storeAs('/frontend/image/product/',$filename);
                    $file->move(public_path().'/frontend/image/product/',$filename);
                    $proimage = new Pimage;
                    $proimage->proextra = $filename;
                    $proimage->product_id = $datas['id'];
                    $proimage->save();
                }



            }
            return redirect()->back()->with('success','Succesfully Updated!!!');
        }

    }

    public function find(Request $request){

        $id = (int)$request->id;
        $datas = Product::where('category_id',$id)->get();
        return response()->json($datas);


    }

    public function categoryview(Request $request){

        $cata = Category::Orderby('id','desc')->get();
        $pmenu = Pmenu::Orderby('id','desc')->get();
        return view('backend.pages.product.menuview',compact('cata','pmenu'));

    }




}
