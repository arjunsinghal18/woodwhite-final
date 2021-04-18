let size = 'single';
$(document).ready(function(){
  // $fn.scrollSpeed(step, speed, easing);
  

var height = $(window).height();
  jQuery.scrollSpeed(height, 800);

  $('.new_query').hide();
});



$('.new_query_btn').click(function(){
    $('.new_query').show(2000);
});
$('#color').click(function(){
    var textcolor = $("#textcolor").val();
    $('.full-height').css("background-color",$('#backcolor').val());
    $('.full-height').css('transition','background-color 300ms linear');
    $('p').css("color",textcolor);
    $('p').css('transitiion','background-color 300ms linear');
    $('h3').css('color',textcolor);
    $('h3').css('transitiion','background-color 300ms linear');
    $('span').css('color',textcolor);
    $('span').css('transitiion','background-color 300ms linear');
    $('a').css('color',textcolor);
    $('a').css('border-color',textcolor);
    $('a').css('transitiion','background-color 300ms linear');
    $('.fa-bars').css('color',textcolor);
    $('.fa-bars').css('transitiion','background-color 300ms linear');
    $('.label').css('color',textcolor);
    $('.label').css('transitiion','background-color 300ms linear');

});

// Custom scrolling speed with jQuery
// Source: github.com/ByNathan/jQuery.scrollSpeed
// Version: 1.0.2

(function($) {

jQuery.scrollSpeed = function(step, speed, easing) {
    
    var $document = $(document),
        $window = $(window),
        $body = $('html, body'),
        option = easing || 'default',
        root = 0,
        scroll = false,
        scrollY,
        scrollX,
        view;
        
    if (window.navigator.msPointerEnabled)
    
        return false;
        
    $window.on('mousewheel DOMMouseScroll', function(e) {
        
        var deltaY = e.originalEvent.wheelDeltaY,
            detail = e.originalEvent.detail;
            scrollY = $document.height() > $window.height();
            scrollX = $document.width() > $window.width();
            scroll = true;
        
        if (scrollY) {
            
            view = $window.height();
                
            if (deltaY < 0 || detail > 0)
        
                root = (root + view) >= $document.height() ? root : root += step;
            
            if (deltaY > 0 || detail < 0)
        
                root = root <= 0 ? 0 : root -= step;
            
            $body.stop().animate({
        
                scrollTop: root
            
            }, speed, option, function() {
        
                scroll = false;
            
            });
        }
        
        if (scrollX) {
            
            view = $window.width();
                
            if (deltaY < 0 || detail > 0)
        
                root = (root + view) >= $document.width() ? root : root += step;
            
            if (deltaY > 0 || detail < 0)
        
                root = root <= 0 ? 0 : root -= step;
            
            $body.stop().animate({
        
                scrollLeft: root
            
            }, speed, option, function() {
        
                scroll = false;
            
            });
        }
        
        return false;
        
    }).on('scroll', function() {
        
        if (scrollY && !scroll) root = $window.scrollTop();
        if (scrollX && !scroll) root = $window.scrollLeft();
        
    }).on('resize', function() {
        
        if (scrollY && !scroll) view = $window.height();
        if (scrollX && !scroll) view = $window.width();
        
    });       
};

jQuery.easing.default = function (x,t,b,c,d) {

    return -c * ((t=t/d-1)*t*t*t - 1) + b;
};

})(jQuery);
AOS.init();

var checked = 1;

$('input:checkbox').on('click',function(){
    var box = $(this);
    var group = "input:checkbox[name='" + box.attr("name") + "']";
    $(group).prop("checked", false);
    box.prop("checked", true);
});

$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var multiselect = $('#switch').is(":checked");
  var $box = $(this);
  if(multiselect == false){
  
    if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    var back = $(this).attr("background-color");
    // alert(back);
    // $('.full-height').css("background",back);
    // $('.full-height').css("transition","background 300ms linear");
    $(group).prop("checked", false);
    $box.prop("checked", true);
    } else {
        $(this).before().css('-webkit-box-shadow','none');
        $(this).before().css('-moz-box-shadow','none');
        $(this).before().css('box-shadow','none');
        $box.prop("checked", false);
  }
}else{
    if($box.is(":checked")){
        $box.before().css('-webkit-box-shadow','0 0 5px 2px #0ff');
        $box.before().css('-moz-box-shadow','0 0 5px 2px #0ff');
        $box.before().css('box-shadow','0 0 5px 2px #0ff');
    }else{
        $box.before().css('-webkit-box-shadow','none');
        $box.before().css('-moz-box-shadow','none');
        $box.before().css('box-shadow','none');
    }
  }
});

$("#switch").click(function(){
    var multi = $(this);
    if(multi.is(":checked")){

    var group = $('input[name="td"]').length;

    for(i=1;i<group+1;i++){
        var img = $('.img'+i).is(":checked");
        if(img == true){
        $('.img'+i).before().css('-webkit-box-shadow','0 0 5px 2px #0ff');
        $('.img'+i).before().css('-moz-box-shadow','0 0 5px 2px #0ff');
        $('.img'+i).before().css('box-shadow','0 0 5px 2px #0ff');
        }
    }

    }else{
        var group = "input:checkbox[name='td']";    
        $(group).prop("checked", false);
        
        var groups = $('input[name="td"]').length;
        for(i=1;i<groups+1;i++){
        var img = $('.img'+i).is(":checked");
        if(img == false){
        $('.img'+i).before().css('-webkit-box-shadow','none');
        $('.img'+i).before().css('-moz-box-shadow','none');
        $('.img'+i).before().css('box-shadow','none');
        }
    }
    }
});

$('#blank_floral').click(function(){
    $('#moonshine_bl').fadeOut('slow');
    $('#abstract_bl').hide('slow');
    $('#kids_bl').fadeOut();
    $('#floral_bl').show('slow');
});
$('#blank_moonshine').click(function(){
    $('#abstract_bl').hide('slow');
    $('#kids_bl').fadeOut();
    $('#floral_bl').hide();
    $('#moonshine_bl').fadeIn('slow');
});
$('#blank_kids').click(function(){
    $('#moonshine_bl').fadeOut('slow');
    $('#abstract_bl').hide('slow');
    $('#floral_bl').show('slow');
    $('#kids_bl').fadeIn();
});
$('#blank_abstract').click(function(){
    $('#moonshine_bl').fadeOut('slow');
    $('#kids_bl').fadeOut();
    $('#floral_bl').hide('slow');
    $('#abstract_bl').show('slow');
});

$('#pill_floral').click(function(){
    $('#moonshine_pil').fadeOut('slow');
    $('#abstract_pil').hide('slow');
    $('#kids_pil').fadeOut();
    $('#floral_pil').show('slow');
});
$('#pill_moonshine').click(function(){
    $('#abstract_pil').hide('slow');
    $('#kids_pil').fadeOut();
    $('#floral_pil').hide();
    $('#moonshine_pil').fadeIn('slow');
});
$('#pill_kids').click(function(){
    $('#moonshine_pil').fadeOut('slow');
    $('#abstract_pil').hide('slow');
    $('#floral_pil').show('slow');
    $('#kids_pil').fadeIn();
});
$('#pill_abstract').click(function(){
    $('#moonshine_pil').fadeOut('slow');
    $('#kids_pil').fadeOut();
    $('#floral_pil').hide('slow');
    $('#abstract_pil').show('slow');
});

function bedcart1(){
    $('input[name=bedsheet]').each(function(){
        if(this.checked){
            var proid = this.getAttribute('product_id');
            // var size = $('.add_bed_btn').getAttribute('bed_size');
            // alert(size);
            bedcart(proid);
        }
    });
}

function bedcart(proid){
    $.ajax({
        url:"cart",
        type:'post',
        data:{
            product_id:proid,size:size, _token: $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            if(data == 'success'){
                // alert('cart_count');
                cart_count();
                dance();
                // toastfs.success('Product Added to Cart');
                // removetost();
                $('.fa-cart-arrow-down').toggleClass('classname');
                setTimeout(
                function() 
                {
                    $('.fa-cart-arrow-down').toggleClass('classname');
                }, 3000);

                $('.mob_cart_item').toggleClass('classname2');
                setTimeout(
                function() 
                {
                    $('.mob_cart_item').toggleClass('classname2');
                }, 3000);
                
            }
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

function update(thi){
    var rowid = thi.getAttribute('rowid');
    var qty_atc = thi.getAttribute('id');
    // alert('asdf');
    $.ajax({
        url:"updatecart",
        type:'post',
        data:{
            rowid:rowid, do:qty_atc , _token: $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            // alert(data);
            // alert(data);
            call();
            cart_count();
            toastfs.success('Cart Updated!');
            removetost();
        },
        error:function(){
            toastfs.error('Something Went Wrong!');
            removetost();
        }
    });
}

function mobupdate(thi){
    var rowid = thi.getAttribute('rowid');
    var qty_atc = thi.getAttribute('id');
    $.ajax({
        url:"updatecart",
        type:'post',
        data:{
            rowid:rowid, do:qty_atc , _token: $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            // alert(data);
            // alert(data);
            mobcart_on();
            cart_count();
            toastfs.success('Cart Updated!');
            removetost();
        },
        error:function(){
            toastfs.error('Something Went Wrong!');
            removetost();
        }
    });
}

function cart_count(){
    // alert('cart_count_call');
    $.ajax({
        url:"cartitem",
        type:'get',
        data:{ id:'1'},
        success:function(data){
            // alert(data);
            
            $('#cart_count').html(data);
            $('.mob_cart_item').html(data);

        },
        error:function(){
            alert('asdfasdf');
        }
    });
}

function bedcart2(){
    // alert('asdf');
    $('input[name=blanket]').each(function(){
        // alert('qe');
        if(this.checked){
            // alert('adf');
            var proid = this.getAttribute('product_id');
            bedcart(proid);
            
        }
    });
}
function bedcart3(){
    // alert('asdf');
    $('input[name=pillow]').each(function(){
        // alert('pillow');
        if(this.checked){
            // alert('check');
            var proid = this.getAttribute('product_id');
            bedcart(proid);
        }
    });
}

function call(){
    // alert('asdf');
    $.ajax({
        url:"cart",
        type:'get',
        data:{},
        success:function(data){
            $('.last_column3').hide();
            $('.last_column3').html(data);
            // $('.last_column3').css('animation','slide-down 3s 3.8s ease-out forwards');
            $('.last_column3').show();
        },
        error:function(){
            alert('asdfasdf');
        }
    });
}

function call_modal(){
    $.ajax({
        url:"deladd",
        type:'get',
        data:{},
        success:function(data){
            $('#checkout_form').html(data);
            // $('.call_modal').click();
            $('.checkout_btn').fadeOut(2000);
            $('.last_column3').css('width','40%');
            $('.last_column3').css('transition','width 2s');
            $('.address_form').show();
            // cart_slide();
        },
        error:function(){
            alert('asdfasdf');
        }
    });
    
}

function call_mobmodal(){
    $.ajax({
        url:"deladd",
        type:'get',
        data:{},
        success:function(data){
            $('.del_form').html(data);
            $(canvas).hide();
            $('.mobile_cart').css('top','40px');
            $('.mobile_cart').css('transition','top 5s linear');
            // $('.mob_cart_view').hide();
            // $('.call_modal').click();
            $('.deladd').css('position','absolute');
            $('.deladd').css('width','90%');
            $('.deladd').css('margin-left','5%');
            $('.deladd').css('height','350px');
            $('.deladd').css('overflow-y','scroll');
            $('.deladd').css('bottom','10px');
            // $('.address_form').show();
            // // cart_slide();
        },
        error:function(){
            alert('asdfasdf');
        }
    });
    
}

function cart_slide(){
    $('.last_column3').css('position','absolute');
    $('.last_column3').css('left','50px');
    $('.last_column3').css('width','40%');
    $('canvas').hide();
    
    $('.address_form').css('position','relative');
    $('.address_form').css('right','0px');
}

$('#checkout_form').on('submit',function(e){
    alert('asdf');
    var fullname = $('#checkout_firstname').val() +' '+$('#checkout_lastname').val();
    var email = $('#checkout_email').val();
    var contact = $('#checkout_contact').val();
    var add1 = $('#checkout_add1').val();
    var add2 = $('#checkout_add2').val();
    var pincode = $('#checkout_pincode').val();
    var state = $('#state').val();

    $.ajax({
        url:"add_delivery_address",
        type:'post',
        data:{
            full_name:fullname, email:email, contact:contact, addressline1:add1, addressline2:add2,pincode:pincode,state:state,country:'india' ,submit:'sum', _token: $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            if(data == 'Logedout'){
                toastfs.error('Please Login First');
                removetost();
            }else{
                razorpay(data)
            }    
        },
        error:function(){
            toastfs.error('Something went wrong!');
            removetost();
        }
    });

});

function mobformsub(){
    mobformsub2();
    return false;
}
function mobformsub2(){
    var fullname = $('#checkout_firstname').val() +' '+$('#checkout_lastname').val();
    var email = $('#checkout_email').val();
    var contact = $('#checkout_contact').val();
    var add1 = $('#checkout_add1').val();
    var add2 = $('#checkout_add2').val();
    var pincode = $('#checkout_pincode').val();
    var state = $('#state').val();

    $.ajax({
        url:"add_delivery_address",
        type:'post',
        data:{
            full_name:fullname, email:email, contact:contact, addressline1:add1, addressline2:add2,pincode:pincode,state:state,country:'india' ,submit:'sum', _token: $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            if(data == 'Logedout'){
                toastfs.error('Please Login First');
                removetost();
            }else{
                // alert('asdf');
                razorpay(data)
            }    
        },
        error:function(){
            toastfs.error('Something went wrong!');
            removetost();
        }
    });
}
$('#color').click(function(){
var back = $('#backcolor').val();
$('#full-height').css('background-color',back);
$('.full-height').css('transition','background-color 300ms linear');
$('#full-height2').css('background-color',back);
$('.full-height2').css('transition','background-color 300ms linear');
$('#full-height3').css('background-color',back);
$('.full-height3').css('transition','background-color 300ms linear');
$('#full-height4').css('background-color',back);
$('.full-height4').css('transition','background-color 300ms linear');
});

function razorpay(add){
    // alert('asdfasdffasdfas')
    // alert(add['amount']);
    var totalAmount = add['amount'];
    // alert(totalAmount);
    totalAmount = parseFloat(totalAmount.replace(",", ''));
    // alert(totalAmount);
    var options = {
    "key": "rzp_test_3zhgUEDgnCIBrK",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "The WoodWhite",
    "description": "Payment",
    "image": "https://images.squarespace-cdn.com/content/576bdcd92994cad8067d9794/1574937609268-Z8XUWHCDOE76T5BFG7DT/LOGO_50.jpg?content-type=image%2Fjpeg",
    "handler": function (response){
          $.ajax({
            url: 'http://localhost:8000/order_accept',
            type: 'get',
            dataType: 'json',
            data: {
            }, 
            success: function (msg) {
                toastfs.success('Order Accepted, Please check your mail!');
                removetost();
                //alert('asdf');
            	// alert(msg);
            	//alert(msg);
                //window.location.href = 'http://localhost/razorpay/success.php';

            },
            failure: function(msg){
                toastfs.error('Something went wrong!');
                removetost();
            }

        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  }

  
  $('.fb').click(function() {
    $('.menu-right').toggleClass('right-open');
  });

  


  

  $('.cross').click(function() {
    $('.menu-right').toggleClass('right-open');
    $('.menu-item').show();
    $('.signup-form').hide();
    $('.login-form').hide();
  });

  $('.log').click(function(){
    $('.menu-item').hide();
    $('.signup-form').hide();
    $('.login-form').show();
});
$('.men').click(function(){
    $('.menu-item').show();
    $('.signup-form').hide();
    $('.login-form').hide();
});
$('.sign').click(function(){
    $('.menu-item').hide();
    $('.login-form').hide();
    $('.signup-form').show();
});

$('.open-cart-here').click(function() {
    //   alert('asdf');
    call();
    $('.mini-cart').toggleClass('right-open');
    slide = true;
    left = false;
    
  });

  $('.user_side_cart').click(function() {
    //   alert('asdf');
    call();
    $('.mini-cart').toggleClass('right-open');
    slide = true;
    left = false;
    
  });

  $('.cart-close').click(function() {
    slide = false;
    left = true;
    $('.address_form').css('display','none');
    $('.last_column3').css('width','80%');
    $('.checkout_btn').fadeIn(2000);
    $('.mini-cart').toggleClass('right-open');
  });

function coupon_apply(){
    var name = $('#coupon_name').val();

    $.ajax({
        url:"coupon_apply",
        type:'post',
        data:{
            coupon_name:name, _token: $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            call();
            toastfs.success('Coupon Applied!');
            removetost();
        },
        error:function(){
            toastfs.error('Something went wrong!');
            removetost();
        }
    });
}


function removetost(){
    setTimeout(
        function() 
        {
            toastfs.remove()
        }, 2000);
}

$('.bed_size').click(function(){
    var bed_size = $(this).attr('size');
    $('.bed_size').css('background-color','transparent');
    $('.bed_size').css('border','1px solid #ffffff');
    $(this).css('background-color','#000000');
    $(this).css('border','1px solid #000000');
    size = bed_size
});

// function select_size(){
//     $('.bed_size').css('background-color','transparent');
//     $('.bed_size').css('border','1px solid #ffffff');
//     var size = $(this).attr('size');
//     alert(size);
// }