<?php

namespace App\Http\Controllers\frontend;
use App\Model\Metatag;
use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Siteconfig;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Information;
use App\Model\Associate;
use App\Model\Membership;
use App\Model\Product;
use App\Model\Special;
use App\Model\Category;
use App\Model\Menu;
use App\Model\Order;
use App\Model\Contact;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
      public function store(Request $request){

          $duplicates = Cart::search(function ($cartItem, $rowId)use($request) {
              return $cartItem->id === $request->id;
          });


          if($duplicates->isNotEmpty()){
              return redirect()->back()->with('success','Item is already in your Cart!!!');
          }


          $id = $request->id;
          $proname = $request->proname;
          $price = $request->price;

        cart::instance('default')->add($id,$proname,1,$price)->associate('App\Model\Product');
      /*  $counts =  cart::instance('default')->count();
        return response()->json($counts);*/

         /* return redirect()->back()->with('success','Succesfully Added to Cart!!!');*/


  }


    public function wishlist(Request $request){


        Cart::instance('wishlist')->add($request->id,$request->proname,1,$request->price)->associate('App\Model\Product');


        /*   return redirect('/cart-show')->with('success','Succesfully Added to Cart!!!');*/
      return redirect()->back();

    }

    public function wishlistcartadd(Request $request){

        $id = $request->id;
        $wish = Cart::instance('wishlist')->get($id);


        Cart::instance('default')->add($wish->id,$wish->name,1,$wish->price)->associate('App\Model\Product');
        $datas = Cart::instance('wishlist')->remove($id);

        /*   return redirect('/cart-show')->with('success','Succesfully Added to Cart!!!');*/
        return redirect()->back();

    }

    public function wishlistindex(Request $request){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $social = Menu::Orderby('id','desc')->first();


        return view('frontend.pages.wishlist',compact('logos','meta','sites','informations','assos','membs','categorys','social','infos','image'));

    }


    public function wishlistdelete( $id){



        $datas = Cart::instance('wishlist')->remove($id);
        return redirect()->back()->with('success','Succesfully Deleted!!!');


    }



    public function update(Request $request){


        cart::instance('default')->add($request->id,$request->proname,$request->qty,$request->price)->associate('App\Model\Product');


        /*   return redirect('/cart-show')->with('success','Succesfully Added to Cart!!!');*/
        return cart::content();

    }



    public function delete( $id){

        $datas = cart::instance('default')->remove($id);
        return redirect()->back()->with('success','Succesfully Deleted!!!');


    }

  public function index(Request $request){


          $meta = Metatag::Orderby('id','desc')->first();
          $logos = Logo::Orderby('id','desc')->first();
          $categorys = Category::all();
          $sites = Siteconfig::Orderby('id','desc')->first();
          $informations = Information::Orderby('id','desc')->get();
          $assos = Associate::Orderby('id','desc')->first();
          $membs = Membership::Orderby('id','desc')->take(4)->get();
          $social = Menu::Orderby('id','desc')->first();


      return view('frontend.pages.cart',compact('logos','meta','sites','informations','assos','membs','categorys','social','infos','image'));

  }



    public function updateqty(Request $request){

            $qty = $request->qty;
            $row = $request->id;
            $datas = Cart::instance('default')->update($row, $qty);

            return response()->json($datas);
    }

    public function checkout(Request $request){
        $meta = Metatag::Orderby('id','desc')->first();
        $logos = Logo::Orderby('id','desc')->first();
        $categorys = Category::all();
        $sites = Siteconfig::Orderby('id','desc')->first();
        $informations = Information::Orderby('id','desc')->get();
        $assos = Associate::Orderby('id','desc')->first();
        $membs = Membership::Orderby('id','desc')->take(4)->get();
        $pros = Product::Orderby('id','desc')->take(8)->get();
        $social = Menu::Orderby('id','desc')->first();

        return view('frontend.pages.checkout',compact('logos','meta','sites','informations','assos','membs','categorys','social','categorys'));
    }

    public function checkoutaction(Request $request){

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
        $datas->company = $request->company;
        $datas->inquiry = $request->inquiry;
        $datas->subscribe = 1;
        $datas->order = 1;
        $datas->save();

        foreach(Cart::content() as $item){

         $order = new Order;
         $order->contact_id = $datas['id'];
         $order->proname  = $item->name;
         $order->quantity  = $item->qty;
         $order->product_id  = $item->id;
         $order->save();

   }




        Cart::destroy();
        return redirect()->back()->with('success','Thank you!!!! We will Contact you Soon!!!!!');
    }


}
