<div class="mobile_cart" style="height:300px; overflow-y:scroll;">
        <div class="container-fluid">
        @foreach($cart as $row)
            @php
                $size = $row->options['size'];
                $product_price = $row->price;
                $final_price = Cart::total();
                $tax = Cart::tax();
                if(isset($row->options['coupon_name'])){
                    if($row->options['coupon_type'] == 'fixed'){
                        $product_price = $row->price - $row->options['coupon_value'];
                    }
                    if($row->options['coupon_type'] == 'percent'){
                        
                        $product_price = $row->price - ($row->price/100)*$row->options['coupon_value'];
                    }
                }
            @endphp
            <div class="row1">
                <div class="col-md1-3">
                    <img src="{{url('images').'/'.$row->options['image']}}" style="width:100%" alt="">
                </div>
                <div class="col-md1-5">
                <p class="cart_pro_name">{{$row->name}}</p>
                <p><span id="single" class="cart_size size" rowid="81bee45238b23f123005a761718ecc6d" onclick="mobupdate(this)">Single</span> &nbsp; <span id="double" class=" size" rowid="81bee45238b23f123005a761718ecc6d" onclick="mobupdate(this)">Double</span> </p>
                
                </div>
                <div class="col-md1-4">
                    <p class="cart_qty"> <span class="qty_edit" id="qty_minus" rowid="{{$row->rowId}}" current_qty="{{$row->qty}}" onclick="mobupdate(this)">-</span>&nbsp;&nbsp; <span class="qty"> {{$row->qty}} </span>&nbsp;&nbsp; <span class="qty_edit" id="qty_plus" rowid="{{$row->rowId}}" current_qty="{{$row->qty}}" onclick="mobupdate(this)" do="plus">+</span></p>
                </div>
                <div class="col-md1-4">
                    <p class="cart_price">{{'Rs. '.$product_price}}  &nbsp;<i class="fa fa-trash-o" id="remove" rowid="{{$row->rowId}}" aria-hidden="true" onclick="mobupdate(this)"></i> </p>
                </div>
            </div>
        @endforeach

            <hr>
            <div class="final_price">
                    <!-- <p class="pricing"> <span class="upper">Item Subtotal </span> <span id="subtotal">Rs. 700.00</span></p> -->
                    <p class="pricing"> <span class="upper">Item Tax </span> <span id="subtotal">{{'Rs. '.Cart::tax()}}</span></p>
                    <p class="pricing"> <span class="upper">Total Value </span> <span id="subtotal">{{'Rs. '.Cart::total()}}</span></p>
                    <div class="coupon">
                        <p class="coupon_text">Apply Coupon</p>
                        <div class="coupon_name" style="position:absolute;">
                        <input type="text" name="" id="coupon_name" style="background-color:transparent;" placeholder="Apply Coupon">
                        <p class="coupon_apply" onclick="coupon_apply()">Apply</p>
                        </div>
                    </div>
                    <center><br><br>
                    <p class="checkout_btn" data-toggle="modal" onclick="call_mobmodal()" data-target="#exampleModal">Checkout</p>
                    </center>
                    </div>
        </div>
    </div>


    <!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:1000;">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="z-index:500;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->