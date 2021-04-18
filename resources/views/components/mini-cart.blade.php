<nav class="min-cart mini-cart" style="background-color:#B5CA85;">
    <p class="cart-close">&#x2715</p>
    <br>

    <div class="menu-item">
    <p class="topicon"><img src="https://static1.squarespace.com/static/576bdcd92994cad8067d9794/t/5ddfa40736172f0b2f62c295/1604914560942/?format=1500w" alt="" style="width:50px;"> WOODWHITE</p>
    <br>
    <p class="menu-item">Home</p>
    <!-- <p class="menu-item">{{Session::get('userlogedin')}}.asdf</p> -->

    <p class="menu-item">About Us</p>
    <p class="menu-item">Products</p>
    @if(null !== session('userlogedin'))
    <a href="{{url('userlogout')}}" ><p class="menu-item">Logout</p> </a>
    @else
    <p class="menu-item"> <span class="log">Login </span>/ <span class="sign">Signup</span></p>
    @endif
    </div>
    <center>
    <div class="login-form" style="padding-left:25px; width:80%; text-align:left; display:none; ">
        <form action="{{url('userlogin')}}" method="post">
        @csrf
            <p style="font-size:35px; color:#000000;">Login</p>
            <div class="login-input form-group">
                <span><i class="fa fa-user-o input-span" aria-hidden="true"></i></span>&nbsp;&nbsp;<input type="text" name="username" placeholder="Username" class="logininput">
            </div>
            <div class="login-input form-group">
                <span><i class="fa fa-user-o input-span" aria-hidden="true"></i></span>&nbsp;&nbsp;<input type="text" name="password" placeholder="Password" class="logininput">
            </div>
            <input type="hidden" name="role" value="user">
            <div class="formgroup">
                <p class="forgot">Forgot Password</p>
            </div>
            <input type="submit" value="Login" class="sub btn logsub">
        </form>
        <p class="dont">Don't Have an Account ?</p>
        <p class="dont2"> <span class="sign">Signup</span></p>
        <p class="dont2"><span class="men">Back To Menu</span></p>
        <br>
        <p class="dont2">Or sign in with</p>
        <br>
        <center>
        <a href="{{url('/login/google')}}" class="tn google"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
        <a href="{{url('/login/facebook')}}" class="tn facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
        </center>
    </div>

    <div class="signup-form" style="padding-left:25px; width:80%; text-align:left; display:none;">
        <form action="" method="post" id="signup_form" onsubmit="return false">
            <p style="font-size:35px; color:#000000;">Signup</p>
            <!-- <div class="row">
                <div class="col-md-6" style="padding-left:5px !important; padding-right:0px !important;">
                    <div class="login-input form-group">
                        <span><i class="fa fa-user-o input-span" aria-hidden="true"></i></span>&nbsp;&nbsp;<input type="text" name="first_name" placeholder="First Name" class="logininput">
                    </div>
                </div>
                <div class="col-md-6" style="padding-left:5px !important; padding-right:0px !important;">
                    <div class="login-input form-group">
                        <span><i class="fa fa-user-o input-span" aria-hidden="true"></i></span>&nbsp;&nbsp;<input type="text" name="last_name" placeholder="Last Name" class="logininput">
                    </div>
                </div>
            </div> -->
            <p id="error"></p>
            <div class="login-input form-group">
                <span><i class="fa fa-user-o input-span" aria-hidden="true"></i></span>&nbsp;&nbsp;<input type="text" id="signup_email" name="email" placeholder="Email" class="logininput">
            </div>
            <div class="login-input form-group">
                <span><i class="fa fa-user-o input-span" aria-hidden="true"></i></span>&nbsp;&nbsp;<input type="text" id="signup_contact" name="contact" placeholder="Contact Number" class="logininput">
            </div>
            <div class="login-input form-group">
                <span><i class="fa fa-user-o input-span" aria-hidden="true"></i></span>&nbsp;&nbsp;<input type="text" id="signup_password" name="password" placeholder="Password" class="logininput">
            </div>
            <input type="hidden" name="user" value="user">
            <input type="submit" value="Signup" class="sub btn">
        </form>
        <p class="dont">Already Have an Account ?</p>
        <p class="dont2"><span class="log">Login</span></p>
        <p class="dont2"><span class="men">Back To Menu</span></p>
        <br>
        <p class="dont2">Or sign in with</p>
        <br>
        <center>
        <a href="{{url('/login/google')}}" class="tn google"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
        <a href="{{url('/login/facebook')}}" class="tn facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
        </center>
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