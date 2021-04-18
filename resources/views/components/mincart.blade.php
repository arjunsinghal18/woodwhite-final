<nav class="min-cart mini-cart" style="background-color:#606060	;">
    <p class="cart-close">&#x2715</p>
    <center>
        <div style="max-width:1280px;" class="cartitems">
            <div class="section section1">
            <!-- <script src="{{url('js/sketch.js')}}"></script> -->
                <div class="column1" data-aos="flip-right"  data-aos-duration="5000" data-aos-delay="1000">
                </div>
                <div class="last_column3">
                </div>
                <div class="address_form">
                    <div class="form" style="width:90%;">
                        <!-- <p>asdfsaf</p><p>asdfsaf</p><p>asdfsaf</p> -->
                        <form action="" id="checkout_form" method="post" onsubmit="return false">
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </center>
</nav>

<style>
.google,.facebook{
    color:#ffffff;
    padding:20px 15px;
    padding-bottom:15px;
    border-radius:10px;
}
.facebook{
    padding:20px 17px;
    padding-bottom: 15px;
}
.google{
    background-color:#EA4335;

}



.google:hover,.facebook:hover,.google{
    color:#fff;
}

.facebook{
    background-color:#4267B2;
}
</style>

<script>
$('#signup_form').on('submit',function(){
    var email = $('#signup_email').val();
    var contact = $('#signup_contact').val();
    var password = $('#signup_password').val();
        $.ajax({
        url:"signup",
        type:'post',
        data:{email:email,contact:contact,password:password,submit:'sub',_token: $('meta[name="csrf-token"]').attr('content') },
        success:function(data){
            if(data == 'success'){
                $('#error').html('Registration Success');
            }else{
                $('#error').html('Registtration fail');
            }
        },
        error:function(){
            alert('asdfasdf');
        }
    });
});

</script>