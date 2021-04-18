<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\deliveryaddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use App\Models\coupon;
use DateTime;
use Carbon\Carbon;
use App\Models\orders;
use App\Models\query;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use PDF;
use Jenssegers\Agent\Agent;


class customer extends Controller
{
    //
    function index(){

        // Cart::restore('username');
        // Cart::destroy();
        $product = Product::select()
                    ->get();
        // foreach(Cart::content() as $row){
        //     echo print_r($row);
        // }
        $agent = new Agent();
        if($agent->isMobile() || $agent->isTablet()){
            return view('mobile',['products'=>$product]);
        }else{
        return view('index2',['products'=>$product]);
        }
    }
    function mobile(){

        // Cart::restore('username');
        // Cart::destroy();
        $product = Product::select()
                    ->get();
        // foreach(Cart::content() as $row){
        //     echo print_r($row);
        // }
        $agent = new Agent();
        if($agent->isMobile()){
        return view('mobile',['products'=>$product]);
        }
    }

    function account(){
        if(!is_user_logged_in()){
            return redirect('');
        }
        $user = user::select()
                    ->where('id','=',session('userlogedin'))
                    ->get();
        return view('account',['user'=>$user]);
    }

    function order(){
        if(!is_user_logged_in()){
            return redirect('');
        }
        $user = user::select()
                    ->where('id','=',session('userlogedin'))
                    ->get();
        $order = orders::select()
                    ->where('user_id','=',session('userlogedin'))
                    ->get();
        return view('order',['order'=>$order,'user'=>$user]);
    }

    function orderpdf(){
        // return view('pdf');
        $order_id = $_GET['order_id'];
        $address_id = $_GET['address_id'];
        $data = orders::select()
                ->where('order_id','=',$order_id)
                ->get();
         $delivery = deliveryaddress::select()
                    ->where('id','=',$address_id)
                    ->get();
        $pdf = PDF::loadview('pdf',['order_det'=>$data,'address'=>$delivery]);
        return $pdf->download($order_id.'.pdf');
    }

    function superhome(){
        return view('superhome');
    }

    function query(){
        $user = user::select()
                    ->where('id','=',session('userlogedin'))
                    ->get();
        $query = query::select()
                        ->where('user_id','=',session('userlogedin'))
                        ->get();
        return view('query',['user'=>$user,'queries'=>$query]);
    }

    function add_query(Request  $req){
        $this->validate($req, [
            'message' => 'required',
        ]);

        $input = reqtoarray($req);
        $input['user_id'] = session('userlogedin');
        $input['query_no'] = 'query_'.rend();
        if(query::create($input)){
            return redirect('query');
        }

    }

    function pro_det(Request $req){
        $id = (int)$_GET['id'];
        $pro_det = Product::select()
                    ->where('id',$id)
                    ->get();
        return $pro_det[0];
    }
    
    function cartcontent(){
        $cart = Cart::content();
        return view('includes.cart',['cart'=>$cart]);
    }

    function mobcartcontent(){
        $cart = Cart::content();
        return view('includes.mobcart',['cart'=>$cart]);
    }

    public function deladd(Request $req){
        $add = deliveryaddress::select()
                ->where('user_id','=',session('userlogedin'))
                ->get();
        
        // $cart = Cart::content();

        return view('includes.deliveryadd',['deliveryadd'=>$add]);
    }

    public function loginpage(Request $req){
        return view('login');
    }

    function userlogin(Request $req){
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $input = reqtoarray($req);
        if (Auth::attempt($input)) {
            date_default_timezone_set('Asia/Kolkata');
            
            // user::where('id','=',Auth::user()->id)
            //     ->update(array('last_login'=>now()));

            session(['userlogedin' => Auth::user()->id, 'first_name' => Auth::user()->first_name,'last_name'=>Auth::user()->last_name]);

            return redirect('');

        }else{
            return back()->with('error','Either your username or password is wrong!, please try again');
        }
    }

    function usersignup(Request $req){
            $this->validate($req, [
                'email' => 'required',
                'contact' => 'required',
                'password' => 'required',
            ]);

            $input = reqtoarray($req);
            $input['password'] = Hash::make($req->input('password'));
            $input['role'] = 'user';
            if(user::create($input)){
                return 'success';
            }else{
                return 'error';
            }
    }

    function deliveryadd(Request $req){
        if(!is_user_logged_in()){
            return 'Logedout';
        }else{
            $this->validate($req,[
                'full_name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'addressline1' => 'required',
                'addressline2' => 'required',
                'pincode' => 'required',
                'state' => 'required',
                'country' => 'required',
            ]);
            $add = deliveryaddress::select()
                    ->where('user_id','=',session('userlogedin'))
                    ->where('full_name','=',$req->input('full_name'))
                    ->where('email','=',$req->input('email'))
                    ->where('contact','=',$req->input('contact'))
                    ->where('addressline1','=',$req->input('addressline1'))
                    ->where('addressline2','=',$req->input('addressline2'))
                    ->where('pincode','=',$req->input('pincode'))
                    ->where('state','=',$req->input('state'))
                    ->get();

            if(count($add) > 0){
                session(['address_id' => $add[0]->id]);
                // return 'success';
                $final = array(
                    'address_id' => session('address_id'),
                    'amount' => Cart::total()
                );
                return $final;
            }else{
                $input = reqtoarray($req);
                $input['user_id'] = session('userlogedin');
                $data = deliveryaddress::create($input)->id;
                session(['address_id' => $data]);
                $final = array(
                    'address_id' => session('address_id'),
                    'amount' => Cart::total()
                );
                if($data != ''){
                    return $final;
                    // return 'success';
                }else{
                    return 'error';
                }
            }
        }
    }

    function cart_value(){
        return Cart::total();
    }

    function logoutuser(){
        session()->forget(['userlogedin']);
        return redirect('');
    }

    function googlelogin(){
        return Socialite::driver('google')->redirect();
    }
    function googlelogincallback(){
        $user = Socialite::driver('google')->user();
        $this->googleuserreg($user);
        return redirect('');
    }

    function facebooklogin(){
        return Socialite::driver('facebook')->redirect();
    }
    function facebooklogincallback(){
        $user = Socialite::driver('facebook')->user();
        $this->facebookuserreg($user);
        return redirect('');
    }

    protected function googleuserreg($data){
        $user = user::where('email','=',$data->email)->first();
        
        if(!$user){
            $user = new user();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->role = 'user';
            $user->status = 1;
            $user->save();
        }

        Auth::login($user);
        session(['userlogedin' => Auth::user()->id, 'first_name' => Auth::user()->first_name,'last_name'=>Auth::user()->last_name]);
    }

    protected function facebookuserreg($data){
        $user = user::where('email','=',$data->email)->first();
        
        if(!$user){
            $user = new user();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }

        Auth::login($user);
        session(['userlogedin' => Auth::user()->id, 'first_name' => Auth::user()->first_name,'last_name'=>Auth::user()->last_name]);
    }
    
    function apply_coupon(Request $req){
        $this->validate($req,[
            'coupon_name' => 'required',
        ]);
    
        $coupon = coupon::select()
                        ->where('name','=',$req->input('coupon_name'))
                        ->get();
        if(count($coupon) > 0){
            $cart = Cart::content();
            $return = '';
            
            $today = new DateTime('now');
            // $expire = date('d/M/Y:H:i:s', $coupon[0]->valid_till);
  
                foreach($cart as $ca){
                    $ca->options['coupon_name'] = $coupon[0]->name;
                    $ca->options['coupon_type'] = $coupon[0]->type;
                    $ca->options['coupon_value'] = $coupon[0]->value;
                }
                return 'success';
        }else{
            return 'fail';
        }
    }

    function apiauth(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/auth/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\n    \"email\": \"develop@thewoodwhite.com\",\n    \"password\": \"Arjun@123@\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
    
    function apiavailable(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://netconnect.bluedart.com/Demo/ShippingAPI/Finder/ServiceFinderQuery.svc?wsdl",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>"{\n    \"pickup_postcode\": \"394210\",\n    \"delivery_postcode\": \"335524\",\n    \"weight\": \"500\",\n    \"cod\": \"0\"\n}",

        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEyMjQwMDYsImlzcyI6Imh0dHBzOi8vYXBpdjIuc2hpcHJvY2tldC5pbi92MS9leHRlcm5hbC9hdXRoL2xvZ2luIiwiaWF0IjoxNjEzNTQ2NTY0LCJleHAiOjE2MTQ0MTA1NjQsIm5iZiI6MTYxMzU0NjU2NCwianRpIjoiY1FDZmhBUDNoSlNLSGRncSJ9.d_YI7QEwIJVNWKqhzwdQES4xO-uYO7QS9gqVyBpnKMU "
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    function postmen(){
        $curl = curl_init();
        // PMAK-602d0db2335340003b6f07b9-29e228d92eaf98a0e4879c8abf15ca05aa : postman apikey
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.getpostman.com/collections/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_POSTFIELDS =>"{\n    \"apikey\": \"PMAK-602d0db2335340003b6f07b9-29e228d92eaf98a0e4879c8abf15ca05aa\"\n}",
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "X-Api-Key: PMAK-602d0db2335340003b6f07b9-29e228d92eaf98a0e4879c8abf15ca05aa"
        ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
	
    }

    function smsapi(){
        $api_key = '25BFE1FAF4BCCA';
        $contacts = '919610966705';
        $from = 'FITVGR';
        $sms_text = urlencode('Hello People, have a great day, this is a test mesSAGE');

        //Submit to server

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, "http://kutility.in/app/smsapi/index.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&entity=1201160871058165717&tempid=999999999999999&routeid=415&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
    }
}
