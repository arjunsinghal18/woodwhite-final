@extends('includes.layout')

@section('title','The Whitewood')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>
 .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      /* text-align: center; */
      font-size: 18px;
      background: hsla(189, 47%, 29%, 1);

background: linear-gradient(330deg, hsla(189, 47%, 29%, 1) 0%, hsla(189, 41%, 52%, 1) 70%);

background: -moz-linear-gradient(330deg, hsla(189, 47%, 29%, 1) 0%, hsla(189, 41%, 52%, 1) 70%);

background: -webkit-linear-gradient(330deg, hsla(189, 47%, 29%, 1) 0%, hsla(189, 41%, 52%, 1) 70%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#27616B", endColorstr="#53A8B7", GradientType=1 );

      /* Center slide text vertically */
      /* display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex; */
      /* display: flex; */
      /* -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center; */
    }
canvas{
    z-index:1;
}

.mob-bred{
    position:fixed;
    top:15px;
    width:90%;
    margin-left:5%;
    z-index:100;
    /* text-align:center; */
}

.mob-bred>p>img{
    float:left;
    position: absolute;
    left: 0;
    right: 0;
    margin: -4px auto 0;
    /* width:100%; */
    /* margin-left:50%; */
}

.mob-bred>i{
    right: 30px;
    top: 30px;
    position: fixed;
}

hr{
    margin-top: 0px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
    width:25px;
}

.sheet{
    position:relative;
    top:65px;
    width:90%;
    margin-left:5%;
}

.sheet>p{
    color:#ffffff;
    font-size:16px;
    margin:0px;
}

input[id="img"] {
    z-index: 5;
    position: relative;
    width: 35px;
    height: 35px;
    -webkit-appearance: none;
    /*background: #c6c6c6;*/
    outline: none;
    cursor: pointer;
    padding-left:0px;
    /*border-radius: 15px;*/
    /*box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);*/
    transition: background 300ms linear;
  }

.details{
    width:90%;
    margin-left:5%;
    position:relative;
    bottom:10px;
}

.details> #product_name,.details > #product_price{
    color:#ffffff;
    font-size:16px;
}
.details > #product_desc{
    font-size:14px;
    color:#fff;
    font-family:opificio;
}

#product_price{
    margin-top:10px;
}

#product_name{
    margin:0px;
}

.add{
    border:1px solid #ffffff;
    color:#ffffff;
    padding:3px;
    font-size:16px;
}

.add:hover{
    color:#ffffff;
    text-decoration:none;
}

.test{
    /* position:fixed; */
    /* margin-top:50px; */
    margin-top:160px;
    /* height:70px; */
    width:200px;
    /* background-color:red; */
}
.mobfull-height{
    background-color:red;
    min-height:100%;
}
.mob_cart{
    height: 30px;
    width: 70px;
    background: red;
    position: fixed;
    bottom: 32px;
    right: 20px;
    z-index: 10;
    /* padding: 4px 25px; */
    padding-right: 7px;
    border-radius: 15px;
    padding-top:2px;
    text-align: right;
}
.mob_cart_item{
    /* position: relative; */
    /* right:10px; */
    /* top:0px; */
    padding:1px 4px;
    border-radius:40px;
    background-color:green;
    
}
.swiper-pagination-bullet{
    width:7px;
    height:7px;
}
.swiper-pagination-bullet-active{
    background-color: #ffffff;
}

.classname {
  -webkit-animation-name: cssAnimation;
  -webkit-animation-duration:1s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: forwards;
}
@-webkit-keyframes cssAnimation {
    0%   { transform: scale(1,1)    translateX(0); }
    10%  { transform: scale(1.1,.9) translateX(0); }
    30%  { transform: scale(.9,1.1) translateX(-100px); }
    50%  { transform: scale(1,1)    translateX(0); }
    100% { transform: scale(1,1)    translateX(0); }
}

.classname2 {
  -webkit-animation-name: cssAnimation2;
  -webkit-animation-duration:1s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: forwards;
}
@-webkit-keyframes cssAnimation2 {
    0%   { transform: scale(1,1)    translateY(0); }
    10%  { transform: scale(1.1,.9) translateY(0); }
    30%  { transform: scale(.9,1.1) translateY(-100px); }
    50%  { transform: scale(1,1)    translateY(0); }
    100% { transform: scale(1,1)    translateY(0); }
}

.menu-right {
    right: -100%;
}
.right-open{
    right:0;
}
.menu{
    width:100%;
}

input[id="img"] {
    z-index: 5;
    position: relative;
    width: 35px;
    height: 30px;
    -webkit-appearance: none;
    /* background: #c6c6c6; */
    outline: none;
    cursor: pointer;
    padding-left: 0px;
    margin:0;
    /* border-radius: 15px; */
    /* box-shadow: inset 0 0 5px rgb(0 0 0 / 20%); */
    transition: background 300ms linear;
}

</style>

<div class="mob_cart open_mob_cart" >
    <div class="mob_cart_item pull-right">1</div>
<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
</div>

<div class="swiper-container">
<div class="mob-bred">
    <p>
        <img src="https://images.squarespace-cdn.com/content/576bdcd92994cad8067d9794/1574937609268-Z8XUWHCDOE76T5BFG7DT/LOGO_50.jpg?content-type=image%2Fjpeg" alt="" style="width:40px;">
    </p>
    <i class="fa fb"> <span class="ba"><hr id="mobhr"></span><span class="ba"><hr id="mobhr"></span><span class="ba"><hr id="mobhr"></span> </i>
    </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <div class="sheet">
            <p>Bedsheet and Pillow Cover Color Palette</p>
            <p>
            <div style="float:left; position:relative;max-width:100%;">
                            @php $i = 1; @endphp
                            @foreach($products as $pro)
                                @if($pro['product_type'] == 'bedsheet')
                                <input type="checkbox" id="img" style="background-image:url({{$pro['preview_image']}})" bedsheet="{{$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="bedsheet" onclick="changesheet(this)">    
                                @php $i++; @endphp
                                @endif
                            @endforeach
                        </div>
            </p>
            <!-- <script src="{{url('js/sketch.js')}}"></script> -->
        </div>
        <!-- <div class="swiper-pagination"></div> -->
        <div class="test"></div>
    <div class="details">
        <p id="product_name" class="sheet_name product_desc">Product Name</p>
        <div id="product_desc" class="sheet_details">
            <p style="margin-bottom:3px;">Single - 60” x 90” | Pillow Cover : 18” x 28”</p>
            <p>Double - 110” x 110” | Pillow Covers : 18” x 28”</p>
        </div>
        <p id="product_price"><a class="add bed_size">₹ 999 : Single</a>&nbsp;&nbsp;&nbsp;<a class="add bed_size">₹ 1699 : Double</a></p>
        <p id="product_price" style="text-align: center; border: 1px solid #000000; width: 67%; background-color:#000000;"><a class="add" onclick="bedcart1()" style="border:none;">Add to Bed</a></p>
    </div>
      </div>
      <div class="swiper-slide" id="main">
        <div class="sheet">
            <p>Blanket Color Palate</p>
            <p>
            <div style="float:left; position:relative;max-width:100%;">
                            @php $i = 1; @endphp
                            @foreach($products as $pro)
                                @if($pro['product_type'] == 'blanket')
                                <input type="checkbox" id="img" style="background-image:url({{$pro['preview_image']}})" bedsheet="{{$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="bedsheet" onclick="changeblank(this)">    
                                @php $i++; @endphp
                                @endif
                            @endforeach
                        </div>
            </p>
        </div>
        <div class="test"></div>
    <div class="details">
        <p id="product_name" class="sheet_name product_desc">Product Name</p>
        <div id="product_desc" class="sheet_details">
            <p style="margin-bottom:3px;">Single Printed Dohar - 60” x 90”</p>
            <p>Double Printed Dohar - 110” x 110”</p>
        </div>
        <p id="product_price"><a class="add bed_size">₹ 1899 : Single</a>&nbsp;&nbsp;&nbsp;<a class="add bed_size">₹ 2699 : Double</a></p>
        <p id="product_price" style="text-align: center; border: 1px solid #000000; width: 67%; background-color:#000000;"><a class="add" onclick="bedcart2()" style="border:none;">Add to Bed</a></p>
    </div>
      
      </div>
      <div class="swiper-slide">
      <div class="sheet">
            <p>Blanket Color Palate</p>
            <p>
            <div style="float:left; position:relative;max-width:100%;">
                            @php $i = 1; @endphp
                            @foreach($products as $pro)
                                @if($pro['product_type'] == 'pillow')
                                <input type="checkbox" id="img" style="background-image:url({{'images/'.$pro['preview_image']}})" bedsheet="{{'images/'.$pro['display_image']}}" background-color="{{$pro['product_background']}}" product_id="{{$pro->id}}" class="{{'img'.$i}}" name="bedsheet" onclick="changepill(this)">    
                                @php $i++; @endphp
                                @endif
                            @endforeach
                        </div>
            </p>
        </div>
        <div class="test"></div>
        <div class="details">
            <p id="product_name">Product Name</p>
            <div id="product_desc">Description Goees Here Description Goees Here Description Goees Here Description Goees Here </div>
            <p id="product_price">₹ <span id="rice">500</span>&nbsp;&nbsp;&nbsp;<a class="add">Add to Bed</a></p>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>

  </div>
            <script src="{{url('js/sketch.js')}}"></script>
<!-- Initialize Swiper -->
<form action="" id="checkout_form" method="post" onsubmit="return mobformsub()">
<div class="mob_cart_view">
<div class="mob_cart_view1"></div>
<div class="del_form">
</div>
</div>
</form>

<style>
.mobile_cart{
    position:absolute;
    bottom:10px;
    width:100%;
}
.row1{
    display:flex;
}
.col-md1-3{
    width:25%;
}
.col-md1-5{
    width:41.66%;
}
.col-md1-4{
    width:33.33%;
}
</style>
<script>
    var swiper = new Swiper('.swiper-container',{
        pagination: {
        el: '.swiper-pagination',
      },
    });
    
    $('#main').on('event', function() {
        $('#myDiv').addClass('swiper-slide-active').trigger('classChange');
    });

    // in another js file, far, far away
    $('#myDiv').on('classChange', function() {
        // do stuff
        alert('asdf');
    });
    $('.open_mob_cart').click(function(){

    });
  </script>
  <style>
  .mob_cart_view{
      position:fixed;
      top:0px;
      /* min-height:100%; */
      min-width:100%;
      background-color:#606060;
      z-index:1;
      display:none;
      height:100vh;
  }
  p{
      margin:0px;
  }
  </style>

  <script>
  $('.open_mob_cart').click(function(){
    // $('.mob_cart_view').css('height','100vh');
    // $('.mob_cart_view').css('transition','height 1s ease');
    mobcart_on();
    $('.mob_cart_view').slideToggle('slow');
    if($('canvas').css("display") == "none"){
        $('canvas').toggle();
    }
    if($('.deladd').css("display") != "none"){
        $('.deladd').toggle();
    }
    
    if(mobslide != 1){
        mobslide = 1;
    }else{
        mobslide = 0;
    }

    
  });

  function mobcart_on(){
    $.ajax({
        url:"mobcart",
        type:'get',
        data:{
            // product_id:proid, _token: $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
                $('.mob_cart_view1').html(data);
            if(data == 'fails'){
                toastfs.error('Either the item is already in cart or something went wrong!');
                removetost();

            }
        },
        error:function(){
            alert('asdfasdf');
        }
    });
  }


  </script>
@stop