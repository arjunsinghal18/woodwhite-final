<style>

</style>

<div class="cont" style="font-size:17px;">
                        <a class="cont_shop"><span>&nbsp</span></a>
                        <span class="view_cart" style="font-family:opificio;">Cart </span>
                    </div>

                    @foreach($cart as $row)
                        @php
                            $size = $row->options['size'];
                            $final_price = $row->price;
                            
                            if(isset($row->options['coupon_name'])){
                                if($row->options['coupon_type'] == 'fixed'){
                                    $final_price = $row->price - $row->options['coupon_value'];
                                }
                                if($row->options['coupon_type'] == 'percent'){
                                    
                                    $final_price = $row->price - ($row->price/100)*$row->options['coupon_value'];
                                }
                            }
                        @endphp
                        
                        
                        <div class="cart_item">
                            <div class="row" style="font-size:15px;">
                                <div class="col-md-2">
                                    <img src="{{url('images').'/'.$row->options['image']}}" class="cart_image" alt="">
                                </div>
                                <!-- <div class="col-md-"></div> -->
                                <div class="col-md-5 qt">
                                <p> <span class="cart_pro_name"> {{ (($row->options['type'] == 'bedsheet')?'Bedsheet and Pillow Covers |': (($row->options['type'] == 'blanket')?' Dohar | ':'Pillow Covers |')) }} {{$row->name}}</span></p> 
                                @if($row->options['type'] != 'pillow')
                                <p><span id="single" class="@php echo (($size == 'single')?'cart_size':'') @endphp size"  rowid="{{$row->rowId}}" onclick="update(this)">Single</span> &nbsp; <span id="double" class="@php echo (($size == 'double')?'cart_size':'') @endphp size"  rowid="{{$row->rowId}}" onclick="update(this)">Double</span> </p>
                                @else
                                <p><span id="single" class="@php echo (($size == 'single')?'cart_size':'') @endphp size"  rowid="{{$row->rowId}}">One Size</span></p>
                                @endif
                                <!-- <p>{{$row->options['quote']}}</p> -->
                                </div>
                                <div class="col-md-2 qt">
                                  <p class="cart_qty" style="text-align:right;"> <span class="qty_edit" id="qty_minus" rowid="{{$row->rowId}}" current_qty="{{$row->qty}}" onclick="update(this)">-</span>&nbsp;&nbsp; <span class="qty"> {{$row->qty}} </span>&nbsp;&nbsp; <span class="qty_edit" id="qty_plus" rowid="{{$row->rowId}}" current_qty="{{$row->qty}}" onclick="update(this)" do="plus">+</span></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="cart_price">{{'₹ '.$final_price}}  &nbsp;<i class="fa fa-trash-o" id="remove"  rowid="{{$row->rowId}}" aria-hidden="true" onclick="update(this)"></i> </p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="final_price" style="font-size:20px;">
                    <!-- <p class="pricing"> <span class="upper">Item Subtotal </span> <span id="subtotal">{{'Rs. '.Cart::subtotal()}}</span></p> -->
                    <p class="pricing"> <span class="upper">Item Tax </span> <span id="subtotal">{{'₹ '.Cart::tax()}}</span></p>
                    <p class="pricing"> <span class="upper">Total Value </span> <span id="subtotal">{{'₹ '.Cart::total()}}</span></p>
                    <div class="coupon">
                        <p class="coupon_text">Apply Coupon</p>
                        <div class="coupon_name">
                        <input type="text" name="" id="coupon_name" style="background-color:transparent;" placeholder="Apply Coupon">
                        <p class="coupon_apply" onclick="coupon_apply()">Apply</p>
                        </div>

                    </div>
                    <center><br><br>
                    <p class="checkout_btn" onclick="call_modal()">Checkout</p>
                    </center>
                    </div>

