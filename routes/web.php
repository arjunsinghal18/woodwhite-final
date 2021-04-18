<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\CartController;
use App\Http\Controllers\user;
use App\Http\Controllers\customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[customer::class,'index']);

Route::get('mobile',[customer::class,'mobile']);

Route::get('account',[customer::class,'account']);

Route::get('order',[customer::class,'order']);

Route::get('getorderpdf',[customer::class,'orderpdf']);

Route::get('query',[customer::class,'query']);

Route::get('api',[customer::class,'apitest']);

Route::get('mobcart',[customer::class,'mobcartcontent']);

Route::get('available',[customer::class,'smsapi']);

Route::post('addquery',[customer::class,'add_query']);

Route::get('superhome',[customer::class,'superhome']);

Route::get('order_accept',[CartController::class,'order_accept']);

Route::get('login',[customer::class,'loginpage']);

Route::post('coupon_apply',[customer::class,'apply_coupon']);

Route::get('/login/google',[customer::class,'googlelogin']);

Route::get('/auth/googlecallback',[customer::class,'googlelogincallback']);

Route::get('/login/facebook',[customer::class,'facebooklogin']);

Route::get('/auth/fbcallback',[customer::class,'facebooklogincallback']);

Route::get('product_details',[customer::class,'pro_det']);

Route::post('cart',[CartController::class,'index']);

Route::post('signup',[customer::class,'usersignup']);

Route::get('cart_value',[customer::class,'cart_value']);

Route::post('add_delivery_address',[customer::class,'deliveryadd']);

Route::post('userlogin',[customer::class,'userlogin']);

Route::get('userlogout',[customer::class,'logoutuser']);

Route::post('admin/login',[admin::class,'login']);

Route::get('admin/orders',[admin::class,'orders']);

Route::get('admin/coupon',[admin::class,'coupon']);

Route::post('updatecart',[CartController::class,'update']);

Route::get('cartitem',[CartController::class,'getcart']);

Route::get('deladd',[customer::class,'deladd']);

Route::get('cart',[customer::class,'cartcontent']);

Route::get('admin',[admin::class,'index']);

Route::get('admin/dashboard',[admin::class,'dashboard']);

Route::get('admin/product',[admin::class,'product']);

Route::get('admin/imagecall',[admin::class,'image']);

Route::get('admin/addproduct',[admin::class,'add_product']);

Route::post('admin/add_product',[admin::class,'add_product']);

Route::get('admin/register',[admin::class,'user_register']);

Route::post('admin/user_register',[admin::class,'user_register']);

Route::get('admin/logout',[admin::class,'logout']);

Route::get('testpage', function(){
    return view('testpage');
});