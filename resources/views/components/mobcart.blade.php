<div class="mobile_cart" style="height:300px; overflow-y:scroll;">
        <div class="container-fluid">
            <div class="row1">
                <div class="col-md1-3">
                    <img src="{{url('images/1-min.png')}}" style="width:100%" alt="">
                </div>
                <div class="col-md1-5">
                <p class="cart_pro_name">Bedsheet</p>
                <p><span id="single" class="cart_size size" rowid="81bee45238b23f123005a761718ecc6d" onclick="update(this)">Single</span> &nbsp; <span id="double" class=" size" rowid="81bee45238b23f123005a761718ecc6d" onclick="update(this)">Double</span> </p>
                
                </div>
                <div class="col-md1-4">
                    <p class="cart_qty"> <span class="qty_edit" id="qty_minus" rowid="81bee45238b23f123005a761718ecc6d" current_qty="1" onclick="update(this)">-</span>&nbsp;&nbsp; <span class="qty"> 1 </span>&nbsp;&nbsp; <span class="qty_edit" id="qty_plus" rowid="81bee45238b23f123005a761718ecc6d" current_qty="1" onclick="update(this)" do="plus">+</span></p>
                </div>
                <div class="col-md1-4">
                    <p class="cart_price">Rs. 700  &nbsp;<i class="fa fa-trash-o" id="remove" rowid="81bee45238b23f123005a761718ecc6d" aria-hidden="true" onclick="update(this)"></i> </p>
                </div>
            </div>
            <div class="row1">
                <div class="col-md1-3">
                    <img src="{{url('images/1-min.png')}}" style="width:100%" alt="">
                </div>
                <div class="col-md1-5">
                <p class="cart_pro_name">Bedsheet</p>
                <p><span id="single" class="cart_size size" rowid="81bee45238b23f123005a761718ecc6d" onclick="update(this)">Single</span> &nbsp; <span id="double" class=" size" rowid="81bee45238b23f123005a761718ecc6d" onclick="update(this)">Double</span> </p>
                
                </div>
                <div class="col-md1-4">
                    <p class="cart_qty"> <span class="qty_edit" id="qty_minus" rowid="81bee45238b23f123005a761718ecc6d" current_qty="1" onclick="update(this)">-</span>&nbsp;&nbsp; <span class="qty"> 1 </span>&nbsp;&nbsp; <span class="qty_edit" id="qty_plus" rowid="81bee45238b23f123005a761718ecc6d" current_qty="1" onclick="update(this)" do="plus">+</span></p>
                </div>
                <div class="col-md1-4">
                    <p class="cart_price">Rs. 700  &nbsp;<i class="fa fa-trash-o" id="remove" rowid="81bee45238b23f123005a761718ecc6d" aria-hidden="true" onclick="update(this)"></i> </p>
                </div>
            </div>
            <div class="row1">
                <div class="col-md1-3">
                    <img src="{{url('images/1-min.png')}}" style="width:100%" alt="">
                </div>
                <div class="col-md1-5">
                <p class="cart_pro_name">Bedsheet</p>
                <p><span id="single" class="cart_size size" rowid="81bee45238b23f123005a761718ecc6d" onclick="update(this)">Single</span> &nbsp; <span id="double" class=" size" rowid="81bee45238b23f123005a761718ecc6d" onclick="update(this)">Double</span> </p>
                
                </div>
                <div class="col-md1-4">
                    <p class="cart_qty"> <span class="qty_edit" id="qty_minus" rowid="81bee45238b23f123005a761718ecc6d" current_qty="1" onclick="update(this)">-</span>&nbsp;&nbsp; <span class="qty"> 1 </span>&nbsp;&nbsp; <span class="qty_edit" id="qty_plus" rowid="81bee45238b23f123005a761718ecc6d" current_qty="1" onclick="update(this)" do="plus">+</span></p>
                </div>
                <div class="col-md1-4">
                    <p class="cart_price">Rs. 700  &nbsp;<i class="fa fa-trash-o" id="remove" rowid="81bee45238b23f123005a761718ecc6d" aria-hidden="true" onclick="update(this)"></i> </p>
                </div>
            </div>
            <hr>
            <div class="final_price">
                    <!-- <p class="pricing"> <span class="upper">Item Subtotal </span> <span id="subtotal">Rs. 700.00</span></p> -->
                    <p class="pricing"> <span class="upper">Item Tax </span> <span id="subtotal">Rs. 35.00</span></p>
                    <p class="pricing"> <span class="upper">Total Value </span> <span id="subtotal">Rs. 735.00</span></p>
                    <div class="coupon">
                        <p class="coupon_text">Apply Coupon</p>
                        <div class="coupon_name" style="position:absolute;">
                        <input type="text" name="" id="coupon_name" style="background-color:transparent;" placeholder="Apply Coupon">
                        <p class="coupon_apply" onclick="coupon_apply()">Apply</p>
                        </div>
                    </div>
                    <center><br><br>
                    <p class="checkout_btn" onclick="call_modal()">Checkout</p>
                    </center>
                    </div>
        </div>
    </div>