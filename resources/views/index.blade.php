<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js" ></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body,
html {
  
  /* display: flex; */
  
}
.sec1{
  height: 100%;
  display:flex;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  justify-content: center;
  align-items: center;
  font-family: arial;
  font-size: 12px;
}
body {
  background: linear-gradient(to right, #24243e, #302b63, #24243e);
  &.fade {
   
    transition: 0.6s ease-in-out;
  
  }
}
.colours {
  position: absolute;
  bottom: 1em;
  display: flex;
  flex-direction: column;
  &__labels {
    display: flex;
    margin-bottom: 0.5em;
    span {
      display: block;
      flex: 2;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 0.9em;
      color: white;
      text-shadow: 0px 0px 4px rgba(0, 0, 0, 1);
    }
    span:first-child {
      flex: 1;
    }
  }
  &__inputs {
    display: flex;
  }
  .jscolor {
    display: block;
    border: 0;
    height: 40px;
    width: 60px;
    margin: 0;
    text-align: center;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;

    &:first-child {
      border-radius: 6px 0 0 6px;
    }
    &:last-child {
      
    }
  }
}

.couch {
  /* width: 1000px;
  height: 394px; */
  transform: scale(0.66);
  position: relative;
  transition: 0.25s ease-in-out;
  &__overlay,
  &__img {
    position: absolute;
    top: 0;
    left: 0;
  }
  

  &__overlay {
    z-index: 2;
    fill: #fcff4d;
    mix-blend-mode: multiply;
  }
  &__overlay.fade {
   
    transition: 0.6s ease-in-out;
  
  }
}

.gen-random {
  background: #222;
  border: 0;
  color: white;
  border-radius: 0 6px 6px 0;
  border-left: 1px solid white;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

@media (max-width: 940px) {
  .couch {
    transform: scale(0.5);
  }
}

@media (max-width: 580px) {
  .couch {
    transform: scale(0.38);
  }
}

@media (max-width: 460px) {
  .couch {
    transform: scale(0.4);
  }
}
.minorbrag {
  color: white;
  position: absolute;
  top: 2rem;
  right: 2rem;
  font-size: 1.25rem;
  display: inline-block;
}
</style>
<div class="sec1">
<!-- <span class="minorbrag">Top 100 Pens of 2019 (6<sup>th</sup> Place)</span> -->
<div>asdfasdfsd</div>
<div class="couch">
<svg version="1.1" class="couch__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="613px" height="762px" style="position:fixed;top:0px; left:0px; border-radius:10px;" viewBox="0 0 350 350" enable-background="new 0 0 350 350" xml:space="preserve">
<path fill="#DECBC2" id="js-couch" d="M450,486c0,6.627-5.373,12-12,12h-589c-6.627,0-12-5.373-12-12v-740c0-6.627,5.373-12,12-12h589
	c6.627,0,12,5.373,12,12V486z"></path>
</svg>
<!-- <svg version="1.1" class="couch__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="746px" height="660px" style="position:fixed;top:0px; left:0px; border-radius:10px;" viewBox="0 0 350 350" enable-background="new 0 0 350 350" xml:space="preserve">
<path fill="red" id="js-couch" d="M450,486c0,6.627-5.373,12-12,12h-589c-6.627,0-12-5.373-12-12v-740c0-6.627,5.373-12,12-12h589
	c6.627,0,12,5.373,12,12V486z"/>
</svg> -->
  <!-- <svg id="js-couch" class="couch__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" width="1000" height="394">
  <defs>
    <path d="M996.35 77.55q-1.85-1.95-8.65-3.75l-62.4-17.1q-9.3-2.75-12.15-2.5-1.8.15-2.85.45l-.75.3q2.25-16.3 3.75-22.05 1.15-4.4 1.4-10.8.2-6.6-.7-10.85-1.25-5.65-3.1-7.8-2.95-3.35-9.65-2.7-5.95.6-39.3 1.7-38.3 1.25-39.45 1.3-10.25.5-126.75.5-5.05 0-54.2 1.3-45.8 1.25-54.05.95-19.45-.45-30.4-.7-20.2-.55-23.1-1.3-22.3-5.85-26.5 1.25-2.65 4.55-3.85 7.9-.6 1.7-.7 2.5-.65-2.2-2.05-4.55-2.75-4.65-6.45-5.2-3.85-.55-13.65-.4-7.4.1-12 .4-.4.05-18.7.9-16.55.8-19.15 1.1-3.4.4-14.6 1.1-11.3.75-13.05.65h-9.8q-8.65-.05-11.45-.4-2.85-.35-9.25-.6-6.7-.15-8.5-.25-2.7-.1-27.75-.1-25.1 0-29.6.1-92.35 1.15-99 1.65-5.15.4-20 0-15.3-.4-24.4-1.25-6.75-.6-21-1.55-12.95-.9-14.85-1.1-6.45-1.05-11.05-1.5-8.7-.85-12.85.5-5.45 1.75-8.1 4.65-3.2 3.4-2.9 8.6.25 4.65 2.1 11.8 1 3.8 2.55 9.1 1 3.85 2.35 10.1-.1 1-1.5 1-1.75 0-7.7.85-7.1 1-9.8 2.05-2.4.9-23 4.75-21.2 3.9-22.05 4.15-8.2 1.85-15.05 3.35Q7.4 69.1 5.65 70.3 2.5 72.45 2 73.1.6 75 .75 79.2q.15 4.15 1.3 12.75.9 6.85 1.45 10 .5 2.75 8.55 54 6.65 42.15 7.35 46.85 1.15 7.65 4.9 28.55 4.55 25.2 6.35 31.2 2.45 8.15 3.8 11.75 1.85 4.9 3.2 5.75 1.25.8 6.85.65 2.75-.05 5.3-.25l23.85.35q.1 0 1 .95t2 .95q1.9 0 3.4-1.4l23.1-.25 43.65.4q135.05 2.15 137.9 1.9 1.25-.1 72.9.5 72.45.65 76.85.45 8.1-.35 64 .4 143.35.95 146 1.1.55.05 75.3.3 74.7.3 79.8.6 8.65.5 68.25-.35l51.75.5 1.6.4q1.95.35 3.8.05 1.45-.25 3.5-.2 1.9 0 3.35-.3 2.1-.45 8.25-.8 6.25-.3 8.75-.05 1.7.2 8 1 5.75.3 7.4-1.75 1.75-2.2 4.95-10.85 2.8-7.55 4.05-12.4.65-2.5 3.6-17.2 2.75-13.75 3.15-14.8.45-1.25 4.45-22.85 4.05-22.4 4.4-24.4.3-1.45 3.75-25.2 3.35-23.2 4-26.3 1.15-5.5 2.35-18.8 1.4-15.7.8-23.7-.6-8.35-3.35-11.15z" id="a" />
  </defs>
  <use xlink:href="#a"/>
</svg> -->

  <img class="couch__img" style="box-shadow: 2px 2px 4px #000000;" src="{{asset('images/Bed.png')}}" alt="">
</div>

<div class="colours">
  <div class="colours__labels">
    <span>Sofa</span>
    <span>Gradient</span>
    <span></span>

  </div>
  <div class="colours__inputs">
    <input id="js-color-1" class="jscolor {onFineChange:'updateCouch(this)'}" value="FCFF4D">
    <input id="js-color-2" class="jscolor {onFineChange:'updateBackgroundD(this)'}" value="24243e">
    <input id="js-color-3" class="jscolor {onFineChange:'updateBackgroundL(this)'}" value="302b63">
    <button class="gen-random" onclick="generateRandom()">Generate random</button>
  </div>
</div>
<div>asfdflj</div>
</div>
<script>
var background = ["#24243e", "#302b63"];
const body = document.getElementsByTagName("body")[0];
const couch = document.getElementById("js-couch");
const col1 = document.getElementById("js-color-1");
const col2 = document.getElementById("js-color-2");
const col3 = document.getElementById("js-color-3");

function updateCouch(picker, string) {
  if (!string) {
  couch.style.fill = picker.toHEXString();
    } else {
      // Used when generating random
      couch.style.fill = string;
     setTimeout(function(){couch.classList.remove("fade");}, 700); 
    }
}

function updateBackgroundD(picker, randArray) {
 if (!randArray) {
  background[0] = picker.toHEXString();
  } else {
    background[0] = randArray[0];
  }
  body.style.background =
    "linear-gradient(to right, " +
    background[0] +
    " , " +
    background[1] +
    " , " +
    background[0] +
    ")";
}

function updateBackgroundL(picker, randArray) {
 if (!randArray) {
  background[1] = picker.toHEXString();
  } else {
    background[1] = randArray[1];
  }
  
  body.style.background =
    "linear-gradient(to right, " +
    background[0] +
    " , " +
    background[1] +
    " , " +
    background[0] +
    ")";
}


// Generate random



function generateRandom() {
// Couch  
var red = Math.floor(Math.random() * 256) ;
var green = Math.floor(Math.random() * 256) ;
var blue = Math.floor(Math.random() * 256) ;
// Grad 1
var grad_1_r = Math.floor(Math.random() * 256) ;
var grad_1_g = Math.floor(Math.random() * 256) ;
var grad_1_b = Math.floor(Math.random() * 256) ;
// Grad 2  
var grad_2_r = grad_1_r >= 206 ? grad_1_r : grad_1_r + 50;
var grad_2_g = grad_1_g >= 206 ? grad_1_g : grad_1_g + 50;
var grad_2_b = grad_1_b >= 206 ? grad_1_b : grad_1_b + 50;
  
let hex = rgbToHex(red, green, blue);
let grad_1_hex = rgbToHex(grad_1_r, grad_1_g, grad_1_b);
let grad_2_hex = rgbToHex(grad_2_r, grad_2_g, grad_2_b);
  
let gradient = [grad_1_hex, grad_2_hex];
  
  updateCouch(null, hex);
  updateBackgroundD(null, gradient);
  updateBackgroundL(null, gradient);
  
    couch.classList.add("fade");
  
 document.getElementById('js-color-1')
    .jscolor.fromString(hex);
  
 document.getElementById('js-color-2')
    .jscolor.fromString(grad_1_hex);
  
   document.getElementById('js-color-3')
    .jscolor.fromString(grad_2_hex);
}

function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}

</script>
