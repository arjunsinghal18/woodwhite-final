@extends('includes.layout')

@section('title','The Whitewood')

@section('content')

<div class="container-fluid login_fullheight">
<br>
    <div class="row">
        <div class="col-md-3"></div>
        <!-- <center> -->
        <div class="col-md-5">
            <!-- <legend>Login Form</legend> -->
            <div style="">
            <div class="loginorsignup">
                <span class="login">Login</span> | <span class="signup">Signup</span>
            </div>
            <br>
            <legend style="text-align:left;">Login</legend>
            <form action="" method="post">
                <div class="login_frm">
                    <div class="form-group login_input_div">
                        <span><i class="fa fa-user-o login_span" aria-hidden="true"></i></span> <input type="text" name="username" placeholder="Username" class="login_input" id="">
                    </div>
                </div>
                <div class="login_form">
                    <div class="form-group login_input_div">
                        <span><i class="fa fa-lock login_span" aria-hidden="true"></i></span> <input type="text" name="password" placeholder="Password" class="login_input" id="">
                    </div>
                </div>
                <input type="submit" name="submit" value="Login" class="form-control" style="border-radius:15px; background-color:#E8F5C7; color:#000000" >
            </form>
            </div>
        </div>
        <!-- </center> -->
        <div class="col-md-4"></div>
    </div>
</div>
<style>

</style>
@stop