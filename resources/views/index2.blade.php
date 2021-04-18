@extends('includes.layout')

@section('title','The Whitewood')

@section('content')
<style>

</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<img style="position:fixed; top: 7px; left:48%; width:50px;" src="https://static1.squarespace.com/static/576bdcd92994cad8067d9794/t/5ddfa40736172f0b2f62c295/1604914560942/?format=1500w" alt="">
<div class="current" id="full-height" data-snap-point data-scroll-speed = "10">
    <center>
    <div class="cart props open-cart-here">
        <div class="lower_box props"></div>
        <div class="upper_lid props"></div>
        <p class="cou" id="cart_count">{{ Cart::count() }}</p>
    </div>    
    <div class="breadcrump">
        <!-- <i><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span></i> -->
        
       <i class="fa fb"> <span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span> </i>
       &nbsp; 
       <!-- <i class="fa fa-shopping-cart" aria-hidden="true"> <span id="cart_count" >{{ Cart::count() }}</span> </i> -->
        </div>
        <div style="max-width:1280px;">
            <div class="section section1">
                
                <div class="column1" data-aos="flip-right"  data-aos-duration="5000" data-aos-delay="1000">
                 <!-- Trigger the modal with a button -->
                    <h3 href="#sec1"  class="sheet_name" onclick="call()">100% Premium Cotton | Delicate White</h3>
                    <div id="detail" class="sheet_details">
                        <br>
                        <p style="margin-bottom:3px;">Single - 60&rdquo; x 90&rdquo; | Pillow Cover : 18&rdquo; x 28&rdquo; | 2pc Set</p>
                        <p>Double - 110&rdquo; x 110&rdquo; | Pillow Covers : 18&rdquo; x 28&rdquo; | 3pc Set</p>
                        <br>
                    </div>
                    <!-- <p id="price">₹ <span id="rate" class="sheet_price">3,999</span></p> -->
                    <p><a id="cart" class="add_bed bed_size" size="single">₹ 999 : Single</a>&nbsp;&nbsp; <a id="cart" class="add_bed bed_size" size="double" >₹ 1599 : Double</a></p>
                    <br>
                    <a id="cart" class="add_bed add_bed_btn" onclick="bedcart1()" style="border:1px solid #000000; background-color:#000000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add to Bed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <br>
                    <br><br><br><br><br><br><br>
                    <p class="quote" ><span class="quote_text">been the industry's standard dummy text ever since the 1500s,</span></p>
                </div>
                
                <div class="column4">
                <!-- <script src="{{url('js/sketch.js')}}"></script> -->
                </div>
                <div class="column3">
                <div class="toggle_div">
                    <!-- <span>Select Multiple</span> &nbsp;&nbsp;<input id="switch" type="checkbox" /> -->
                    <p id="sel">Bedsheets &#x26; Pillow Covers</p>
                </div>
                    <br>
                    <div style="float:right; position:relative;max-width:250px;">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'bedsheet')
                            <input type="checkbox" id="img" style="background-image:url({{$pro['preview_image']}})" bedsheet="{{$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="bedsheet" onclick="changesheet(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
<div id="full-height2" data-snap-point data-scroll-speed = "20">
    <center>
        <div style="max-width:1280px;">
            <div class="section section1">
                <div class="column1" data-aos="flip-right"  data-aos-duration="5000" data-aos-delay="1000">
                    <h3 class="blanket_name">100% Premium Cotton | Check Mate</h3>
                    <!-- <div id="detail" class="blanket_details">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div> -->
                    <div id="detail" class="blanket_details">
                        <br>
                        <p style="margin-bottom:3px;">Single Printed Dohar - 60&rdquo; x 90&rdquo;</p>
                        <p>Double Printed Dohar - 90&rdquo; x 100&rdquo;</p>
                        <br>
                    </div>
                    <br>
                    <p><a id="cart" class="add_bed bed_size" size="single">₹ 1899 : Single</a>&nbsp;&nbsp; <a id="cart" class="add_bed bed_size" size="double" >₹ 2699 : Double</a></p>
                    <br>
                    <a id="cart" class="add_bed add_bed_btn" onclick="bedcart2()" style="border:1px solid #000000; background-color:#000000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add to Bed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <!-- <p id="price">₹ <span id="rate" class="blanket_price">3,999</span></p>
                    <a id="cart" onclick="bedcart2()">Add to Bed</a> -->
                    
                </div>
                <script src="{{url('js/sketch.js')}}"></script>
                <div class="column4"></div>
                <div class="column3">
                <div class="toggle_div">
                    <!-- <span>Select Multiple</span> &nbsp;&nbsp;<input id="switch" type="checkbox" /> -->
                </div>
                <!-- 
                    Important, Not to delete
                    <p id="sel">Blanket Color Palate <br> <span id="sele" style="cursor:pointer" > <span id="blank_kids" style="cursor:pointer">Kids</span> | <span id="blank_moonshine" style="cursor:pointer"> Moonshine </span> | <span id="blank_floral" style="cursor:pointer">Floral</span> | <span id="blank_abstract"> Abstract </span> </span></p> -->
                <p id="sel">Printed Dohar</p>
                    <div style="float:right; position:relative;max-width:250px;" id="kids_bl">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'blanket')
                            <input type="checkbox" id="img" style="background-image:url({{$pro['preview_image']}})" bedsheet="{{$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="blanket" onclick="changeblank(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div>
                    
                    <!-- Important Not to delete -->
                    <!-- <div style="float:right; position:relative;max-width:250px;" id="moonshine_bl">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'blanket' && $pro['product_category'] == 'moonshine')
                            <input type="checkbox" id="img" style="background-image:url({{'images/'.$pro['preview_image']}})" bedsheet="{{'images/'.$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="blanket" onclick="changeblank(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div>
                    <div style="float:right; position:relative;max-width:250px;" id="floral_bl">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'blanket' && $pro['product_category'] == 'floral')
                            <input type="checkbox" id="img" style="background-image:url({{'images/'.$pro['preview_image']}})" bedsheet="{{'images/'.$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="blanket" onclick="changeblank(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div>
                    <div style="float:right; position:relative;max-width:250px;" id="abstract_bl">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'blanket' && $pro['product_category'] == 'abstract')
                            <input type="checkbox" id="img" style="background-image:url({{'images/'.$pro['preview_image']}})" bedsheet="{{'images/'.$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="blanket" onclick="changeblank(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div> -->
                    
                </div>
            </div>
        </div>
    </center>
</div>
<div id="full-height3"  data-snap-point  data-scroll-speed = "50">
    <center>
        <div style="max-width:1280px;">
            <div class="section section1">
                <div class="column1" data-aos="flip-right"  data-aos-duration="5000" data-aos-delay="1000">
                    <h3 class="pillow_name">100% Premium Cotton | Check Mate</h3>
                    
                    <div id="detail" class="blanket_details">
                        <br>
                        <p style="margin-bottom:3px;">Universal Size - 18&rdquo; x 28&rdquo; | 2pc</p>
                        <!-- <p>Double Dohar - 90&rdquo; x 100&rdquo;</p> -->
                        <br>
                    </div>
                    <br>
                    <p><a id="cart" class="add_bed bed_size" size="single">₹ 499 : One Size</a></p>
                    <br>
                    <a id="cart" class="add_bed add_bed_btn" onclick="bedcart3()" style="border:1px solid #000000; background-color:#000000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add to Bed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    <!-- <div id="detail" class="pillow_details">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                    <br>
                    <p id="price">₹ <span id="rate" class="pillow_price">3,999</span></p> -->
                    <!-- <a id="cart" onclick="bedcart3()">Add to Bed</a> -->
                    
                    <!-- <p class="quote" > &ldquo; <span class="quote_text">been the industry's standard dummy text ever since the 1500s,</span>&rdquo; </p> -->
                </div>
                <script src="{{url('js/sketch.js')}}"></script>
                <div class="column4"></div>
                <div class="column3">
                <div class="toggle_div">
                    <!-- <span>Select Multiple</span> &nbsp;&nbsp;<input id="switch" type="checkbox" /> -->
                </div>
                <!-- <p id="sel">Pillow Color Palate <br> <span id="sele"> <span id="pill_kid" style="cursor:pointer">Kids</span> | <span id="pill_moonshine" style="cursor:pointer"> Moonshine </span> | <span id="pill_moonshine" style="cursor:pointer">Floral</span> | <span id="pill_abstract"> Abstract </span> </span></p> -->
                <p id="sel">Printed Pillow Covers</p>
                    <div style="float:right; position:relative;max-width:250px;" id="floral_pil">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'pillow')
                            <input type="checkbox" id="img" style="background-image:url({{$pro['preview_image']}})" bedsheet="{{$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="pillow" onclick="changepill(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div>
                    
                    <!-- Not to delete Important -->
                    <!-- <div style="float:right; position:relative;max-width:250px;" id="moonshine_pil">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'pillow' && $pro['product_category'] == 'moonshine')
                            <input type="checkbox" id="img" style="background-image:url({{'images/'.$pro['preview_image']}})" bedsheet="{{'images/'.$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="pillow" onclick="changepill(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div>
                    
                    <div style="float:right; position:relative;max-width:250px;" id="abstract_pil">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'pillow' && $pro['product_category'] == 'abstract')
                            <input type="checkbox" id="img" style="background-image:url({{'images/'.$pro['preview_image']}})" bedsheet="{{'images/'.$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="pillow" onclick="changepill(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div>
                    <div style="float:right; position:relative;max-width:250px;" id="kids_pil">
                        @php $i = 1; @endphp
                        @foreach($products as $pro)
                            @if($pro['product_type'] == 'pillow' && $pro['product_category'] == 'kids')
                            <input type="checkbox" id="img" style="background-image:url({{'images/'.$pro['preview_image']}})" bedsheet="{{'images/'.$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="pillow" onclick="changepill(this)">    
                            @php $i++; @endphp
                            @endif
                        @endforeach
                    </div> -->
                </div>
            </div>
        </div>
    </center>
</div>
<!-- <div id="full-height4" onclick="call()" style="z-index:5"  data-snap-point  data-scroll-speed = "100">
<center>
        <div style="max-width:1280px;">
            <div class="section section1">
                <div class="column1" data-aos="flip-right"  data-aos-duration="5000" data-aos-delay="1000">
                </div>
                <div class="column4"></div>
                <div class="last_column3">
                </div>
                <div class="address_form">
                    <div class="form" style="width:90%;">
                        <form action="" id="checkout_form" method="post" onsubmit="return false">
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </center>
</div> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>


</script>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color:#edfdff;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cart Review</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>



@stop