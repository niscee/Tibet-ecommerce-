<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Siteconfig;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Information;
use App\Model\Associate;
use App\Model\Membership;
use App\Model\Product;
use App\Model\Metatag;
use App\Model\Special;
use App\Model\Category;
use App\Model\Menu;
use App\Model\Pmenu;
use App\Model\Contact;
use App\Model\Subscribe;
use Mail;
class IndexController extends Controller
{
    public function index(){
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::orderby('id','desc')->get();
        $pmenus = Pmenu::orderby('id','desc')->get();
        $meta = Metatag::Orderby('id','desc')->first();
        $sliders = Slider::Orderby('id','desc')->get();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('count','desc')->paginate(12);
        $brows = Special::Orderby('id','desc')->first();
        $latests = Product::Orderby('id','desc')->take(6)->get();
        return view('frontend.includes.master',compact('logos','sliders','pmenus','meta','sites','informations','assos','membs','pros','latests','brows','categorys','meta'));
    }


    public function social(){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $pmenus = Pmenu::orderby('id','desc')->get();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();

        return view('frontend.pages.social',compact('logos','pmenus','sites','meta','informations','assos','membs','categorys','social'));
    }

    public function About(){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $pmenus = Pmenu::orderby('id','desc')->get();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();
        return view('frontend.pages.about',compact('logos','pmenus','sites','meta','informations','assos','membs','categorys','social'));
    }



    public function information($slug){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $pmenus = Pmenu::orderby('id','desc')->get();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();
        $infos = Information::where('slug',$slug)->first();

        return view('frontend.pages.infos',compact('logos','pmenus','sites','meta','informations','assos','membs','categorys','social','infos'));
    }



    public function contact(Request $request){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $pmenus = Pmenu::orderby('id','desc')->get();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();


        return view('frontend.pages.contact',compact('logos','pmenus','sites','meta','informations','assos','membs','categorys','social','categorys','pname','cata'));
    }


    public function inquiry( Request  $request){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $pmenus = Pmenu::orderby('id','desc')->get();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();

        $slug = $request->slug;
        $orderpro = Product::where('slug',$slug)->first();
        $ordercata_id = $orderpro['category_id'];
        $ordercata = Category::find($ordercata_id);



        return view('frontend.pages.inquiry',compact('logos','pmenus','sites','meta','informations','assos','membs','categorys','social','categorys','orderpro','ordercata'));
    }


  public function pmenu(){

      $meta = Metatag::Orderby('id','desc')->first();
      $logos = Logo::Orderby('id','desc')->first();
      $categorys = Category::all();
      $pmenus = Pmenu::orderby('id','desc')->get();
      $sites = Siteconfig::Orderby('id','desc')->first();
      $informations = Information::Orderby('id','desc')->get();
      $assos = Associate::Orderby('id','desc')->first();
      $membs = Membership::Orderby('id','desc')->take(4)->get();
      $pros = Product::Orderby('count','desc')->paginate(12);
      $social = Menu::Orderby('id','desc')->first();
      $customs = Menu::Orderby('id','desc')->first();
      return view('frontend.pages.pmenu',compact('logos','pmenus','sites','pmenus','meta','informations','assos','membs','categorys','social','categorys','customs','pros'));
  }


    public function custom(){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $pmenus = Pmenu::orderby('id','desc')->get();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();
        $customs = Menu::Orderby('id','desc')->first();
        return view('frontend.pages.custom',compact('logos','pmenus','sites','meta','informations','assos','membs','categorys','social','categorys','customs'));
    }


    public function find(Request $request){

       $id = (int)$request->id;
        $datas = Product::where('category_id',$id)->get();
        return response()->json($datas);

    }


    public function contactaction(Request $request){

        $this->validate($request,[

            'phone' => 'required|digits:10',
            'email' => 'required',
            'inquiry' => 'required',

        ]);


        $datas = new Contact;
        $datas->name = ucwords($request->name);
        $datas->phone = $request->phone;
        $datas->email = $request->email;
        $datas->Subject = $request->subject;
        $datas->category = $request->category;
        $datas->product = $request->product;
        /*$datas->product_code = $request->product_code;*/
        $datas->company = $request->company;
        $datas->inquiry = $request->inquiry;

         $datas->save();





         return redirect()->back()->with('success','Thank you!!!! We will Contact you Soon!!!!!');
    }




    public function subscribe(Request $request){

        $email = $request->email;
    /*    $nischal = $request->email;*/
        $nischal = $email;

        $check = Subscribe::where('email',$nischal)->first();

        if($check)
        {


          return redirect()->back()->with('sorry','You have already Subscribed Us!!!!');

        }
        else{
            $datas = new Contact;
            $datas->email = $nischal;
            $datas->subscribe = 1;
            $datas->save();


            $subs = new Subscribe;
            $subs->email = $nischal;
            $subs->save();
           return redirect()->back()->with('ok','Thank you for Subscribing!!!!!!');

/*
            Session::flash('success', 'Subscribed Succesfully!!!');
            return View::make('partials/flash-messages');*/

        }


    }


    public function productdetails($slug){
        $meta = Metatag::Orderby('id','desc')->first();
        $prodetails = Product::where('slug',$slug)->first();
        $count = $prodetails['count'];
        $prodetails->count = $count+1;

/*        $count = $prodetails->count;
        $prodetails->count =  $count->count+1;
        $prodetails->Save();*/

        $pcata_id = $prodetails['category_id'];
        $id = $prodetails['id'];
        $prodetails->save();
        $pcata = Product::where('category_id',$pcata_id)->get()->except($id);
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();
        $infos = Information::where('slug',$slug)->first();
        $pmenus = Pmenu::orderby('id','desc')->get();
        return view('frontend.pages.productdetails',compact('prodetails','pmenus','meta','logos','sites','informations','assos','membs','categorys','social','infos','prodetails','datas','pcata'));

    }



    public function product($slug){
        $meta = Metatag::Orderby('id','desc')->first();
        $catacollection= Category::where('slug',$slug)->first();
        $id = $catacollection['id'];
        $pros = Product::where('category_id',$id)->paginate(6);

        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $social = Menu::Orderby('id','desc')->first();
        $infos = Information::where('slug',$slug)->first();
        $pmenus = Pmenu::orderby('id','desc')->get();
        return view('frontend.pages.product',compact('prodetails','pmenus','logos','sites','informations','meta','assos','membs','categorys','social','infos','prodetails','catacollection','pros'));

    }


    public function productmenu($slug){
        $meta = Metatag::Orderby('id','desc')->first();

        $catacollection= Pmenu::where('slug',$slug)->first();
        $id = $catacollection['id'];

        $pros = Product::where('pmenu_id',$id)->paginate(6);

        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $social = Menu::Orderby('id','desc')->first();
        $infos = Information::where('slug',$slug)->first();
        $pmenus = Pmenu::orderby('id','desc')->get();
        return view('frontend.pages.productmenu',compact('prodetails','pmenus','logos','sites','informations','meta','assos','membs','categorys','social','infos','prodetails','catacollection','pros'));

    }


    public function search(Request $request){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();



        $inputone = $request->search;


        if($inputone){
            $results = Product::where('protype','like',"%".$inputone."%")->orWhere('proname', 'like',  $inputone."%")->orWhere('proname', 'like',  "%".$inputone."%")->paginate(12);


            return view('frontend.pages.search',compact('logos','sites','informations','assos','membs','categorys','social','categorys','results','meta'));
        }




    }



}
