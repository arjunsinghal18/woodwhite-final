@extends('includes.layout')

@section('title','The Whitewood')

@section('content')
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo,#myVideo2 {
  position: fixed;
  right: 0;
  bottom: 0;
  /* top:50%; */
  object-fit: cover;
  width: 100vw;
  /* height: 100vh; */
}

.left_anc,.right_anc{
    position:fixed;
    bottom:0;
    min-width:50%;
    min-height:100%;
}
.left_anc{
    left:0;
}
.right_anc{
    right:0;
}
.content {
  position: fixed;
  bottom: 0;
  /* background: rgba(0, 0, 0, 0.5); */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

@media(max-width:1080px){
  .desk{
    display:none;
  }
  .mob{
    display:block !important;
  }
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
</head>
<body>



<video autoplay muted loop id="myVideo" class="desk">
  <source src="{{url('video/superhome.mp4')}}" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<video autoplay muted loop id="myVideo2" class="mob" style="display:none;">
  <source src="{{url('video/mobsuperhome.mp4')}}" type="video/mp4">
  Your browser does not support HTML5 video.
</video>



<div class="content">
<a href="{{url('/')}}" class="left_anc" ></a>
<a href="{{url('admin/login')}}" class="right_anc" ></a>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
$('document').ready(function(){
//    alert('asdf');
    // $( ".left_anc" ).css('background-color','#293D2A' ).delay( 1500 ).fadeIn( 1000 );
    // $('.right_anc').css('background-color','#CACFBE').delay(1500).fadeIn(1000);
});


</script>

<script>
$(document).ready(function(){
  if ((screen.width<=992)) {
    $('.left_anc').attr('href','mobile');
  }
  else {
  //do something else
  }
});

</script>

@stop