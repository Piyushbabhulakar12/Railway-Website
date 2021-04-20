<?php

session_start();

if ($_SESSION['email'] == true) 
{
  $_SESSION['email'];
}
else
{
	header("location:regi/log.php");
}



?>




<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Contact</title>
   <style type="text/css">
         body
      {
        font-family: 'Poppins', sans-serif;
        background: #F4F9FF;
      }
      .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #ffffff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #455A64;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: ;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.nav_link:hover
{
  background: #407BFF;
  color: #ffffff;
  border-radius: 50px;
}
.round1
{
    border:1px solid #2D84FB;
    border-radius: 50px;
    width: 45px;
    height: 43px;
    line-height: 42px;
    background: #fff;
    color: #2D84FB;
    text-align: center;
}
.round2
{
      border:1px solid #ddd;
    border-radius: 50px;
    width: 45px;
    height: 43px;
    line-height: 42px;
    background: #fff;
    color: ;
    text-align: center; 
}
.text_p
{
    color: #2D84FB;
    font-size: 15px;
}
.text_p1
{
    color: #969494;
    font-size: 15px;
}
.head_tex
{
    color: #969494;
    font-size: 13px;
}
.head_tex_p
{
    color: #969494;
    font-size: 18px;
}
footer
{
  background: #2F3C4E;
}

@media only screen and (max-width: 600px) {
  .baasd
  {
    display: none;
  }
  }
   </style>
</head>
<body>

<form method="post">

   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="find_train.php">Find Train</a>
  <a href="resurvation.php">Book Ticket</a>
  <a href="profile.php">Profile</a>
  <a href="booking_histoy.php">Booking History</a>
  <a href="contact.php">Contact Us</a>
  <a href="about.php">About Us</a>
  <a href="logout.php">Logout</a>
</div>

    

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span style="font-size:20px;cursor:pointer;color: #455A64;" onclick="openNav()">&nbsp &nbsp&#9776;</span>&nbsp&nbsp  Railway</a>
    <button class="navbar-toggler baasd" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: #F4F9FF; border: none;">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link nav_link" aria-current="page" href="index.php" style="color: #455A64; border-radius: 50px;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="find_train.php" style="color: #455A64; border-radius: 50px;">Find Train</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="resurvation.php" style="color: #455A64; border-radius: 50px;">Book Ticket</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="booking_histoy.php" style="color: #455A64; border-radius: 50px;">History</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="profile.php" style="color: #455A64; border-radius: 50px;">Profile</a>
  </li>
</ul>
    </div>
  </div>
</nav>








<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
        <div style="background: #fff; border-radius: 10px;">
          <div class="container">
             <br>
             <h2>About Us</h2>
             <br>

             <h6>Rail transportation in the United States consists primarily of freight shipments, with a well integrated network of standard gauge private freight railroads extending into Canada and Mexico. Passenger service is mainly mass transit and commuter rail in major cities. Intercity passenger service, once a large and vital part of the nation's passenger transportation network, plays a limited role as compared to transportation patterns in many other countries. The United States has the largest rail transport network size of any country in the world.</h6>
<br>

          </div>
        </div>
    </div>
  </div>
</div>



<h2 class="mt-4" style="text-align: center;color: #2F3C4E;">Popular Place</h2>




 <center>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">



      <div class="card" style="width: 18rem; height: 27rem; border: none;">
          <img src="https://images.pexels.com/photos/1007426/pexels-photo-1007426.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="..." style="height: 200px;">
      <div class="card-body" style="text-align: left;">
         <h1 style="font-size: 30px;">Delhi</h1>
           <p class="card-text" style="font-size: 15px;">It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself.</p>
      </div>
      </div>
      
    </div>
    <div class="col-md-4">
      
      <div class="card" style="width: 18rem; height: 27rem; border: none;">
          <img src="https://images.pexels.com/photos/784879/pexels-photo-784879.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="..." style="height: 200px;">
      <div class="card-body" style="text-align: left;">
        <h1 style="font-size: 30px;">Jaipur</h1>
           <p class="card-text" style="font-size: 15px;">The City Palace, Jaipur was established at the same time as the city of Jaipur, by Maharaja Sawai Jai Singh II, who moved his court to Jaipur from Amber, in 1727.</p>
      </div>
      </div>


    </div>
    <div class="col-md-4">

      <div class="card" style="width: 18rem; height: 27rem; border: none;">
          <img src="https://images.pexels.com/photos/5829962/pexels-photo-5829962.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="..." style="height: 200px;">
      <div class="card-body" style="text-align: left;">
        <h1 style="font-size: 30px;">Ahmedabad</h1>
           <p class="card-text" style="font-size: 15px;">Ahmedabad District comprises the city of Ahmedabad, in the central part of the state of Gujarat in western India. It is the seventh most populous district in India</p>
      </div>
      </div>
      
    </div>
  </div>
</div>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">

      <div class="card" style="width: 18rem; height: 27rem; border: none;">
          <img src="https://t3.gstatic.com/images?q=tbn:ANd9GcTNITw-7i1mhGxPDDwGHnVJICPeSR_mU649hBG7lcMe2l-A5VfVzNKDEJeoLU4TIpX3fKjtkRi11722ypjNNOZCIg" class="card-img-top" alt="..." style="height: 200px;">
      <div class="card-body" style="text-align: left;">
         <h1 style="font-size: 30px;">Mumbai</h1>
           <p class="card-text" style="font-size: 15px;">The Municipal Corporation Building, Mumbai, located in South Mumbai, Maharashtra, India is a Grade IIA heritage building opposite to the Chhatrapati Shivaji Maharaj Terminus at the junction.</p>
      </div>
      </div>
      
    </div>
    <div class="col-md-4">
      
      <div class="card" style="width: 18rem; height: 27rem; border: none;">
          <img src="https://t2.gstatic.com/images?q=tbn:ANd9GcRuyUzX14cI-2ozvKXqCd5R9RWuizVjMjPWtIV_WhWYGzM65ohE_YyAMP0fPaO9OFuxAAaa5cmUbRymcOwKDVErKw" alt="..." style="height: 200px;">
      <div class="card-body" style="text-align: left;">
        <h1 style="font-size: 30px;">Amber Palace</h1>
           <p class="card-text" style="font-size: 15px;">Amer Fort or Amber Fort is a fort located in Amer, Rajasthan, India. Amer is a town with an area of 4 square kilometres located 11 kilometres from Jaipur, the capital of Rajasthan.</p>
      </div>
      </div>


    </div>
    <div class="col-md-4">

      <div class="card" style="width: 18rem; height: 27rem; border: none;">
          <img src="https://images.unsplash.com/photo-1544298903-35eee5a95b4d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=795&q=80" alt="..." style="height: 200px;">
      <div class="card-body" style="text-align: left;">
        <h1 style="font-size: 30px;">Goa</h1>
           <p class="card-text" style="font-size: 15px;">Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the area’s tropical spice plantations</p>
      </div>
      </div>
      </center>
    </div>
  </div>
</div>




<footer class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-6 mt-2">
        <h3 style="color: #fff;">Train</h3>
      </div>
      <div class="col-6 mt-3">
        <span style="color: #fff;">Copyright &copy; in 2021</span>
      </div>
    </div>
  </div>
</footer>  



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>