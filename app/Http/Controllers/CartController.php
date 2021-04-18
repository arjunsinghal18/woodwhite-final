<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\product;
use App\Models\orders;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $id = (int)$req->input('product_id');
        
        $pro_det = Product::select()
                    ->where('id',$id)
                    ->get();
        $price = json_decode($pro_det[0]->product_price);
        $final_price = $price->price_1;
        
        $sku = json_decode($pro_det[0]->sku);
        foreach(Cart::content() as $row){
            if($id == $row->id){
                return 'fails';
            }
        }

        if($req->input('size') == 'double'){
            $final_price = $price->price_2;
        }
        $cart_image = $pro_det[0]->display_image;

        if($pro_det[0]->product_type == 'blanket'){
            $cart_image = $pro_det[0]->cart_image;
        }elseif($pro_det[0]->product_type == 'pillow'){
            $cart_image = $pro_det[0]->preview_image;
        }
        if(Cart::add($pro_det[0]->id, $pro_det[0]->product_name, 1, $final_price, ['size' => $req->input('size'), 'image' => $cart_image, 'type' => $pro_det[0]->product_type,'quote' => $pro_det[0]->product_quote], $pro_det[0]->tax)){
            return 'success';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id='')
    {
        $rowid = $request->input('rowid');
        $cartitem = Cart::get($rowid);
        $result= '';
        if($request->input('do') == 'qty_minus'){
            if($cartitem->qty == 1){
                Cart::remove($rowid);
            }else{
                $now = $cartitem->qty-1;
                Cart::update($rowid,$now);
            }
        }
        
        if($request->input('do') == 'qty_plus'){
                $now = $cartitem->qty+1;
                Cart::update($rowid,$now);
        }

        if($request->input('do') == 'double'){
            if($cartitem->options['size'] != 'double'){
                $i = 0;
                foreach(Cart::content() as $cartpro){
                    $cartid = $cartpro->id;
                    $cartsize = $cartpro->options['size'];
                    if($cartid == $cartitem->id && $cartsize == 'double'){
                        $i++;
                        break;
                    }
                }
                if($i > 0){
                    $result = 'Item with this size is already in your cart!';
                }else{
                    $pro_det = Product::select()
                        ->where('id',$cartitem->id)
                        ->get();
                    $price = json_decode($pro_det[0]->product_price);
                    Cart::add($pro_det[0]->id, $pro_det[0]->product_name, 1, $price->price_2, ['size' => 'double','image'=> $pro_det[0]->display_image, 'quote' => $pro_det[0]->product_quote], $pro_det[0]->tax);
                    $result = 'Product with Double size is added to cart';
                }
            }
        }

        if($request->input('do') == 'single'){
            if($cartitem->options['size'] != 'single'){
                foreach(Cart::content() as $cartpro){
                    $cartid = $cartpro->id;
                    $cartsize = $cartpro->options['size'];
                    if($cartid == $cartitem->id && $cartsize == 'single'){
                        $result = 'Item with this size is already in your cart!';
                        break;
                    }else{
                        $pro_det = Product::select()
                        ->where('id',$cartitem->id)
                        ->get();
                        $price = json_decode($pro_det[0]->product_price);
                        Cart::add($pro_det[0]->id, $pro_det[0]->product_name, 1, $price->price_1, ['size' => 'single','image'=> $pro_det[0]->display_image, 'quote' => $pro_det[0]->product_quote], $pro_det[0]->tax);
                        $result = 'Product with single size is added to cart';
                        break;
                    }
                }
            }
        }

        // if($request->input('do') == 'single'){
        //     $pro_det = Product::select()
        //             ->where('id',$cartitem->id)
        //             ->get();
        //     $price = json_decode($pro_det[0]->product_price);
        //     $cartitem->options['size'] = 'single';
        //     $cartitem->price = $price->price_1;
        // }

        if($request->input('do') == 'remove'){
            Cart::remove($rowid);
        }
        // return print_r($current);
        //

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getcart(){
        return  Cart::count();
    }

    public function order_accept(){
        $order = array();
        $order['order_id'] = 'test';
        $order['user_id'] = session('userlogedin');
        $order['payment_via'] = 'razorpay';
        $order['$payment_id'] = 'test';
        $order['address_id'] = session('address_id');
        $order['order_details'] = Cart::content();
        if(orders::create($order)){
            Cart::destroy();
            return 'success';
        }
    }
}
