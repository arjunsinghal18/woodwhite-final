let bed;
let pillow;
let blanket;
let newBed;
let newPillow;
let newBlanket;
let slash;
let slashLeft;
let slashRight;
let newSlashLeft;
let newSlashRight;
let background;
let sheet1;
let x;
let y;
let left = false;
let slide = false;
let stopx;
let stopy;
let mobslide;
let wslide , hslide;

let lid = document.querySelector('.upper_lid');
let box = document.querySelector('.lower_box');
let crt = document.querySelector('.cart');
let clik = document.querySelector('#cart_click');
let visible = true;

let w;
let h;
let slashed = false;
let slashXL = 0;
let slashXR = 0;
let slashY = 0;
let counter;
let temp;

x = 0;
y = 0;
let bx = x;
let by = 120;


function preload() {
bed = loadImage("https://3d86e366.woodwhite-images.pages.dev/whitebed.webp");
pillow = loadImage("assets/pillow.png");
blanket = loadImage("assets/blanket.png");
// newBed = loadImage("assets/new_bed.png");
newPillow = loadImage("assets/new_pillow.png");
newBlanket = loadImage("assets/new_blanket.png");
slash = loadImage("assets/slash.png");
slashLeft = loadImage("assets/slash_left.png");
slashRight = loadImage("assets/slash_right.png");
newSlashLeft = loadImage("assets/new_slash_left.png");
newSlashRight = loadImage("assets/new_slash_right.png");
//   var arjun = "Images/1-min.png";
//   sheet1 = loadImage(arjun);
//     alert(data);
}

// function calltoimg(data2){
//   //  alert(data2);
//   $.each(data2, function(key,val) {
//       sheet1 = loadImage(val);
//       sheet2 = loadImage(val);
//       sheet3 = loadImage(val);
//       sheet4 = loadImage(val);
//       sheet5 = loadImage(val);
//       });
//       // alert('sheet1');
// }
function changesheet(thi){
  if(thi.checked){
    background = thi.getAttribute("background-color");
    var sheet = thi.getAttribute("bedsheet");
    var id = thi.getAttribute('product_id');
    var dum = 1;
    newBed = loadImage(sheet);
    swapbed();
    // $('.sheet_details').hide('slow');
    // $('.sheet_price').hide('slow');
    $.ajax({
      url:"product_details",
      type:'get',
      data:{
          id
      },
      success:function(data){
        $('.sheet_name').hide('slow');
    $('.quote_text').hide('slow');
        // alert(json_decode(data));
        var price = JSON.parse(data.product_price);
        // var price2 = price.price_1;
        var back_gra_1 = data.product_background;
        var back_gra_2 = data.product_back_gradient;
        $('.sheet_name').html(data.product_name);
        // $('.sheet_details').html(data.product_description);
        $('.sheet_price').html(price.price_1);
        $('.quote_text').html(data.product_quote);

        $('body').css("background","linear-gradient(330deg, "+back_gra_2+" 0%, "+ back_gra_1+" 70%)");
        $('body').css("transition","background 300ms linear");
        // $('#full-height2').css("background",background);
        // $('#full-height2').css("transition","background 300ms linear");
        // $('#full-height3').css("background",background);
        // $('#full-height3').css("transition","background 300ms linear");
        $('.sheet_name').show(500);
        $('.quote_text').show('slow');
        // $('.sheet_details').show('slow');
        // $('.sheet_price').show('slow');
  
      },
      error:function(){
          alert('asdf');
      }
  })
  }
}

$(document).ready(function(){
  $.ajax({
    url:"cart",
    type:'get',
    data:{},
    success:function(data){
        // alert(data);
        // data2 = JSON.parse(data); 
        // alert(data2);
        // alert('adsf');   
        // $.each(data, function() {
        //   alert(data);
        // });
    },
    error:function(){
        alert('asdfasdf');
    }
});
});


function changeblank(thi){
  if(thi.checked){
    background = thi.getAttribute("background-color");
    var blanket = thi.getAttribute("bedsheet");
    var id = thi.getAttribute('product_id');
    var dum = 1;
    newBlanket = loadImage(blanket);
    swapblank();
    $('.blanket_name').hide('slfow');
    // $('.blanket_details').hide('slow');
    $('.blanket_price').hide('slow');
    $.ajax({
      url:"product_details",
      type:'get',
      data:{
          id
      },
      success:function(data){
        // alert(json_decode(data));
        var price = JSON.parse(data.product_price);
        // var price2 = price.price_1;
        $('.blanket_name').html(data.product_name);
        // $('.blanket_details').html(data.product_description);
        $('.blanket_price').html(price.price_1);
        // $('.full-height2').css("background",background);
        // $('.full-height2').css("transition","background 300ms linear");
        $('.blanket_name').show('slow');
        // $('.blanket_details').show('slow');
        $('.blanket_price').show('slow');
      },
      error:function(){
          alert('asdf');
      }
  })
  }
  by = 100;
}

function changepill(thi){
  if(thi.checked){
    background = thi.getAttribute("background-color");
    var blanket = thi.getAttribute("bedsheet");
    var id = thi.getAttribute('product_id');
    var dum = 1;
    newPillow = loadImage(blanket);
    swappill();
    $('.pillow_name').hide('slow');
    $('.pillow_details').hide('slow');
    $('.pillow_price').hide('slow');
    $.ajax({
      url:"product_details",
      type:'get',
      data:{
          id
      },
      success:function(data){
        // alert(json_decode(data));
        var price = JSON.parse(data.product_price);
        // var price2 = price.price_1;
        $('.pillow_name').html(data.product_name);
        $('.pillow_details').html(data.product_description);
        $('.pillow_price').html(price.price_1);
        // $('.full-height3').css("background",background);
        // $('.full-height3').css("transition","background 300ms linear");
        $('.pillow_name').show('slow');
        $('.pillow_details').show('slow');
        $('.pillow_price').show('slow');
      },
      error:function(){
          alert('asdf');
      }
  })
  }
}

function musePressed(){
  if(slashed){
    swapSlash()    
  }
  slashXL = 0;
  slashXR = 0;
  counter = 5;
  
  slashed = true;
  swap();
}

function swapbed(){
  temp = bed;
  bed = newBed;
  newBed = temp;
}

function swapblank(){
  temp = blanket;
  blanket = newBlanket;
  newBlanket = temp;
}

function swappill(){
  
  
  temp = pillow;
  pillow = newPillow;
  newPillow = temp;

  
  
}

function swapSlash(){
  temp = slashLeft;
  slashLeft = newSlashLeft;
  newSlashLeft = temp;
  
  temp = slashRight;
  slashRight = newSlashRight;
  newSlashRight = temp;
}

/* function slashMove(){
  slashXL-=1;
  slashXR+=1;
  if(slashXL<-width/2){
    slashed = false;
    swapSlash();
  }
} */



function setup(){
  createCanvas(windowWidth, windowHeight, WEBGL);
  if(width>height){
    h = int(max(300,height-20));
    w = int(492*h/591);
    stopx = w;
    stopy = h;
    if(h>540){
      h = 540;
      stopy = h;
      bh = h;
    }
    if (w>433) {
      w = 433;
      stopx = w;
    }
  }
  else{
    w = int(max(300,width-20));
    h = int(591*w/492);
    stopx = w;
    stopy = h;
  }
  if(width<1024){
    w = .7*w;
    h = .7*h;
  }
  $('.test').css('height',h+'px');
  wslide = w;
    hslide = h;
}




q = y;
function draw(){
  frameRate(60);
  clear();  
  noStroke();
  rectMode(CENTER);
  // alert(slide);
  
  if(slide == true){
    x = x-8;
    // y = y-1;
    // by = by-1;
    // let xslide , yslide;
    
    if(h > .8*stopy){
      h = 0.995*h;
    }
    if(w > .8*stopx){
    w = 0.995*w;
    }
    if(x <= -stopx){
      slide = false;
    }
  }

  if(left == true){
    // if(h < stopy){
    //   h = 1.1*h;
    //   }
    if(w < stopx){
    // w = 1.05*w;
    // h = 1.*h;
    if(w < wslide){
      w = 1.005*w;
    }
    if(h < hslide){
      h = 1.005*h;
    }
    // w = wslide;
    // h = hslide;
    }
    if(x >= 0){
      left = false;
      x = 0;
    }
    if(left == true){
    x = x+8;
    // y = y+1;
    // by = by+1;
    }    
  }
  if(by > 0){
    // alert('asd');
    by -= 1.5; 
  }
  if(mobslide == 1){
    if(y > -170){
      y = y-5;
    }
    if(by > -170){
      by = by-5;
    }
  }
  if(mobslide == 0){
    if(y != 0){
      y = y+5;
    }
    if(by < 0){
      by = by+5;
    }
  }
  
  if(y >= (q+10)){
    y = y+5;
  }
  texture(bed);
  rect(x,y,w,h);
  texture(pillow);
  rect((x),(y),(w),(h));
  texture(blanket);
  rect((x-1),by,w,h);
  if(slashed){
    // slashMove();
    texture(slashLeft);
    rect(slashXL,slashY,w,h);
    texture(slashRight);
    rect(slashXR,slashY,w,h);
      
    if(counter<0){    
      slashXL-=20;
      slashXR+=20;
    }
    else{
      texture(slash);
      rect(0,0,w,h);
      counter-=1;
    }
    if(slashXL<-width/2){
      slashed = false;
      counter = 5;
      swapSlash();
    }
  }
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight, WEBGL);
  if(width>height){
    h = int(max(300,height-20));
    w = int(492*h/591);
    if(h>540){
      h = 540;
    }
    if (w>433) {
      w = 433;
    }
  }
  else{
    w = int(max(300,width-20));
    h = int(591*w/492);
  }
  if(width<1024){
    w = .7*w;
    h = .7*h;
  }
  $('.test').css('height',h+'px');
}
let cartt = true;

crt.addEventListener('click', function(){
  if(visible)
      lid.style.display = 'none';
  else
      lid.style.display = 'flex';
  visible = !visible;
})

crt.addEventListener('mouseover', function(){
  box.style.transform = 'scale(1.1)';
  lid.style.transform = 'scale(1.1) translateY(-15px)';
})

crt.addEventListener('mouseout', function(){
  box.style.transform = 'scale(1)';
  lid.style.transform = 'scale(1)';
})

function dance(){
  crt.classList.remove('anim');
  void crt.offsetWidth;
  crt.classList.add('anim');
}