<?php
include("components/header.php");
?>


<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 {
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("views/resources/images/forest.jpg");
  min-height: 80%;
}

.bgimg-2 {
  background-image: url("views/resources/images/fly.jpg");
  min-height: 450px;
}

.bgimg-3 {
  background-image: url("views/resources/images/leaf.jpg");
  min-height: 450px;
}
.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}
.caption-bottom {
  position: absolute;
  left: 0;
  bottom: 20%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}
.caption-bottom span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

.modal-content {
    background-color: transparent;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Harlestone Firs</h3>
  <p style="text-align: center;">This photo was taken using a Canon 600d (50mm lens) during a lovely walk through the forest, I like to try to get lost here :-)</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Fly on a bed</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#666;text-align:center;padding:50px 80px;text-align: justify;">
    <p>My wife and I found this fly on our bed and noticed the fantastic colours so we both took a photo, the iPhone picture actually shows more definition</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:20px 80px;text-align: justify;">
 
             
  </div>


<?php
include("components/footer.php");


