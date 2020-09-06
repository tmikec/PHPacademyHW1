<?php require_once 'footer.php' ?>

<!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Academy homework</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  <style>
  .sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; 
  padding-top: 60px; 
  transition: 0.7s; 
}

/* Menu nav */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #4CBB17;
  display: block;
  transition: 0.3s;
}

/* hover na sidenav */
.sidenav a:hover {
  color: #f1f1f1;
}

/* close button */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
#main {
  transition: margin-left .5s;
  padding: 20px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  </style>
  </head>
    <body>
      
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="operators.php">Operatori</a>
  <a href="#">About</a>
  <a href="#">Services</a>
</div>

<!-- Sidenav -->
<div>
        <img src="images/logo.jpg" style="width:55px;height:45px;max-width:50%" align="right">
      </div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu

</span>
            
        <div class="off-canvas-content" data-off-canvas-content>
          <br><br><div class="callout primary" style="background-color:#4CBB17"> 
            <div class="row column">
              <h1>Hello!</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>
            </div>
          </div>
          <div class="row small-up-2 medium-up-3 large-up-4">
           
          </div>

          <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Sirina mySidenav na 0 i left margin na 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}    </script>
    </body>
</html>
