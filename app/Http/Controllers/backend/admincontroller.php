<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Input;
use Hash;
use App\Model\Siteconfig;
use App\Model\Logo;
use App\Model\Contact;
use App\Model\Category;
use App\Model\Product;
use App\Model\Order;
class admincontroller extends Controller
{

    use AuthenticatesUsers;



    public function register(){

        return view('backend.register');

    }


    public function registeraction(Request $request){

        $this->validate($request,[

            'name' => 'required|string|max:20',

            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        $request['password'] = bcrypt($request->password);


        User::create($request->all());

        return redirect('/dashboard/profile')->with('alert','Succesfully Registerd');

    }




    public function login(){


        return view('backend.login');

    }




    public function loginaction(Request $request){

        $this->validate($request,[
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){


            return redirect('/dashboard');
        }

        return redirect('/@dashboard@')->with('alert','Login Credentials doesnt Match');

    }



    public function index(){

/*
        return view('backend.master',compact('datas'));*/

        $datas = Siteconfig::all();
        $logos = Logo::all();
        return view('backend.pages.site.add',compact('datas','logos'));
    }



    protected function guard()
    {
        return Auth::guard();
    }







    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/@dashboard@');
    }







    public function profile(Request $request){

        $id = (int)$request->id;
        $datas = User::find($id);

        if($datas['utype'] == 'user'){

            return view('backend.pages.profile.admin');
        }
        else{

            $nis = User::where('utype','user')->get();
            return view('backend.pages.profile.add',compact('nis'));
        }


    }



    public function profileaction(Request $request){

        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string',


        ]);

        $id = (int)Auth::user()->id;
        $datas = User::find($id);
        $datas->name = $request->name;

        $datas->email = $request->email;


        if(Input::hasFile('image')){

            $file=Input::file('image');
            $file->move(public_path().'/backend/userimg',$file->getClientOriginalName());
            $datas->image= $file->getClientOriginalName();
        }
        $datas->Save();

        return redirect('/dashboard')->with('Succesfully Updated');

    }


    public function adminprofiledelete(Request $request){
        $id = (int)$request->id;
        $datas = User::find($id);
        $datas->delete();
        return redirect()->back()->with('success','Succesfully Deleted!!!!');
    }


    public function passwordAction(Request $request)
    {
        $id = (int)$request->id;
        $this->validate($request, [
            'oldpassword'     => 'required',
            'password' => 'required|min:4|confirmed',
        ]);


        $data = $request->all();
        $data['password'] = bcrypt($request->password);

    $user = User::find($id);



        if(!Hash::check($data['oldpassword'], $user->password)){

            return redirect()->back()->with('error','oopss!!! old password didnt match!!!');
        }
        else{
                $user->password = $data['password'];
                $user->save();
            return redirect()->back()->with('success','Succesfully Updated!!!');
        }

    }



    public function contactMessages()
    {
        $data = new Contact;
        $notifications = Contact::where('seen', 0)->limit(4)->orderby('id','desc')->get();
        $count = Contact::where('seen', '=', '0')->count();
        $output = '';


        if ($count == 0) $output .= "<li><a><span><span>No New Notifications</span></span>";
                   foreach ($notifications as $key => $notification) {
                    $output .= "<li><a href='" . route('message-view',['id' => $notification->id]) . "'><span style='color:darkslategrey'><b>{$notification->name}</b> sent you a message!!!</span></span><br>";
                    $output .= "<span class='message' style='color:darkslategrey'>{$notification->email} </span> </a> </li>";
            }

               $response = [
                'status' => true,
                'code' => 200,
                'notifications' => $output,
                'count' => $count
            ];
            return response()->json($response);



    }


    public function viewContactMessages(){
        $datas = Contact::Orderby('id','desc')->paginate(7);
        return view('backend.pages.contact.contact', compact('datas'));
    }


    public function messageview(Request $request){
        $id = (int)$request->id;
        $datas = Contact::find($id);

        if($datas['subscribe'] == 0){
            $id = $datas['category'];
            $das = Category::find($id);
            $proname = $datas['product'];
            $pros = Product::where('proname',$proname)->first();
            $datas->seen =1;
            $datas->save();
            return view('backend.pages.contact.singlemessage', compact('datas','das','pros'));
        }

        else{
            $id = $datas['category'];
            $das = Category::find($id);
            $proname = $datas['product'];
            $pros = Product::where('proname',$proname)->first();
            $datas->seen =1;
            $datas->save();
            return view('backend.pages.contact.subscribemessage', compact('datas','das','pros','orders'));
        }
    }

    public function confirm(Request $request){
        $id = (int)$request->id;
        $datas = Contact::find($id);

        return view('backend.pages.contact.delete',compact('datas'));
    }


    public function msgdelete(Request $request){
        $id = (int)$request->id;
        $datas = Contact::find($id);
        $datas->delete();
        return redirect('dashboard/contact-message');
    }






}
