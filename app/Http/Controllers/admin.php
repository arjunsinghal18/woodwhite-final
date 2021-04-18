<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use App\Models\orders;
use App\Models\coupon;
use Auth;


class admin extends Controller

{
    //

    function index(Request $req){
        if (is_logged_in()) {
            return redirect('admin/dashboard');
        }
        return view('admin.index');
    }

    function login(Request $req){
        $this->validate($req, [
            'username' => 'required|regex:/^[a-zA-Z\s]*$/',
            'password' => 'required',
        ]);
        $input = reqtoarray($req);
        if (Auth::attempt($input)) {
            date_default_timezone_set('Asia/Kolkata');
            
            User::where('id','=',Auth::user()->author_id)
                ->update(array('last_login'=>now()));

            session(['logedin' => Auth::user()->id, 'user' => Auth::user()->name]);

            return redirect('admin/dashboard');
        }else{
            return back()->with('error','Either your username or password is wrong!, please try again');
        }
    }

    function dashboard(){
        if (!is_logged_in()) {
            return redirect('admin');
        }
        return view('admin.dashboard');
    }

    function product(){
        if (!is_logged_in()) {
            return redirect('admin');
        }
        $product = product::select()
                        ->get();
        return view('admin.product',['product'=>$product]);
    }

    function image(){
        $product = product::select('product_name')
                        ->get();
        $produ = array();
            foreach($product as $pro){
                array_push($produ,$pro['product_name']);
            }
        return $produ;
    }

    function add_product(Request $req){
        if (!is_logged_in()) {
            return redirect('admin');
        }
        if ($req->Method() == 'POST'){

            $this->validate($req, [
                'product_name' => 'required',
                'preview_image' => 'required',
                'display_image' => 'required',
                'product_type' => 'required',
                'product_category' => 'required',
                'product_price' => 'required',
                'product_description' => 'required',
                'product_background' => 'required',
                'product_quote' => 'required',
                'product_size' => 'required',
                'product_quantity' => 'required',
                'available_quantity' => 'required',
                'compare_price' => 'required',
            ]);
            
            $input = reqtoarray($req);

            $pro_pri = array(
                'price_1' => (int)$input['product_price'][0],
                'price_2' => (int)$input['product_price'][1]
            );

            $skujson = json_encode($input['product_sku']);
            $pro_qu_json = json_encode($input['product_quantity']);
            $pro_size_json = json_encode($input['product_size']);
            $pro_price_json = json_encode($pro_pri);
            $pro_ava_json = json_encode($input['available_quantity']);
            $pro_comp_price = json_encode($input['compare_price']);

            $input['product_sku'] =  $skujson;
            $input['product_quantity'] = $pro_qu_json;
            $input['product_size'] = $pro_size_json;
            $input['product_price'] = $pro_price_json;
            $input['available_quantity'] = $pro_ava_json;
            $input['compare_price'] = $pro_comp_price;

            
            print_r($input);
            $preview_fileName = $req->file('preview_image')->getClientOriginalName() ;
            $display_fileName = $req->file('display_image')->getClientOriginalName() ;
            $input['preview_image'] = $preview_fileName;
            $input['display_image'] = $display_fileName;
            // $req->preview_image->storeAs('images', $fileName , 'images');
            if(product::create($input) && $req->preview_image->storeAs('images', $preview_fileName , 'images') && $req->display_image->storeAs('images', $display_fileName , 'images')){
                session()->flash('success','Product is added successfully!');
                return redirect('admin/product');
            }
        }else{
        return view('admin.product_add');
        }
    }

    function user_register(Request $req){
        if (!is_logged_in()) {
            return redirect('admin');
        }
        if ($req->Method() == 'POST'){
            $this->validate($req, [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

            $input = reqtoarray($req);
            $input['password'] = Hash::make($req->input('password'));
            if(user::create($input)){
                return back()->with('success','User Registered');
            }else{
                return back()->with('error','Something went wrong!');
            }
        }else{
            return view('admin.register');
        }
        
    }

    function logout(){
        session()->forget(['logedin','user']);
        return redirect('admin');
    }

    function orders(){
        $orders = orders::select()
                ->get();

        // printf($orders);
        // die();
        return view('admin.order',['order'=>$orders]);
    }

    function coupon(){
        $coupon = coupon::select()
                    ->get();
        return view('admin.coupon',['coupon'=>$coupon]);
    }

}
