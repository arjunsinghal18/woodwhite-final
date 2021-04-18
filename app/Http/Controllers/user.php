<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\deliveryaddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Hash;
// use App\Models\user;
use Auth;
class user extends Controller
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
        
        return view('index2',['products'=>$product]);
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
                'name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'password' => 'required',
            ]);

            $input = reqtoarray($req);
            $input['password'] = Hash::make($req->input('password'));
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

    

}