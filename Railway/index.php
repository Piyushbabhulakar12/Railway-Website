
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <title>Home Page</title>
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
.bg
{
  background-image: url(bg.png);
  height: 540px;
  width: 100%;
  max-width: 100%;
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

.table
{
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
}
.table td , .table th
{
  padding: 18px 10px;
  border:1px solid #ddd;
  text-align: center;
  font-size: 16px;

}
.table th
{
   
  background: #ffff;
  color: #969494;
}
.drop
{
  background-color: #fff;
  outline: none;
  border-radius: 50px;
  text-decoration: none;
  width: 210px;
  text-align: center;
  text-indent: 5px;
}
option
{
  border-radius: 50px;
  
}
.searc_bxo
{
  justify-content: center;
   display: flex;
}

.top_n
{
  background: #fff; border-radius: 10px; 
  border: none; margin-top: 100px; width: 350px;
}
.tex-nav
{
  width: 320px;
}
footer
{
  background: #2F3C4E;
}

/*Responsive*/

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
@media only screen and (max-width: 600px) {
  .baasd
  {
    display: none;
  }
  .table thead
  {
    display: none;
  }
  .table, .table tbody , .table tr, .table td
  {
    display: block;
    width: 100%;
  }
  .table td{
    text-align: right;
    font-size: 12px;
    padding-left: 50%;
    text-align: right;
    position: relative;
  }
  .table td::before{
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-size: 15px;
   text-align: left;
  }
  .searc_bxo
  {
    display: block;
    width: 100%;
  }
  .drop
  {
    border-radius: 50px;
    height: 50px;
  }
  .text_re
  {
    width: 250px;
    margin-left: 0%;
  }
  .top_n
  {
    width: 280px;
  }
  .tex-nav
  {
    width: 250px;
  }

}
@media only screen and (max-width: 300px)
{
 .top_n
  {
    width: 240px;
  }
  .text_re
  {
    width: 190px;
    margin-left: 0%;
  }
  .tex-nav
  {
    width: 180px;
  }
}
    </style>
  </head>
  <body>


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

<div class="bg">

  <div class="container">
    <div class="row">
      <div class="col-md-6">
       
       
         <center>
         <div class="top_n">
          <br>
         <h5 style="text-align: left; margin-left: 21px; color: #2F3C4E;" class="mt-2">Book Seat</h5>
         <center>
         <form action="find_train1.php" method="get">
           <input type="text" name="t_from" placeholder="From" class="form-control mt-4 tex-nav">
         <input type="text" name="t_to" placeholder="To" class="form-control mt-4 tex-nav">
         <input type="date" name="" class="form-control mt-4 tex-nav">
        <input type="submit" name="submit" value="Search Train" class="btn btn-primary rounded-pill mt-4" >
         </form>
         </center>
         <br>
       </div>
       </center>
      


      </div>
      <div class="col-md-6">
       <h2 style="color: #ffff; margin-top: 190px; font-size: 40px;">Book Your Train <br> ticket at ease. </h2>
      </div>
    </div>
  </div>


</div>

<h2 class="mt-5" style="text-align: center; margin-top: 20px; color: #2F3C4E;">Serach Booking Id Or Search Train</h2>

<form method="post">

<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      
      <div style="background: #fff; border-radius: 10px;  border: none; ">
        <br><br>
        
        <center>
          
           <div class="searc_bxo">
            <select onclick="updateChar()" id="zoneSelect" class="drop mt-4">
              <option value="book" class="drop_m">Search Book Id</option>
              <option value="train" class="drop_m">Search Train</option>
            </select>
              <input type="text" name="book_id" placeholder="Enter Booking Id" class="form-control mt-4 text_re" id="text1" style="margin-left: 20px;">
               <input type="text" name="t_from" placeholder="From" class="form-control mt-4 text_re" id="text2" style="width: 200px; margin-left: 20px;" >
                <input type="text" name="t_to" placeholder="To" class="form-control mt-4 text_re" id="text3" style="width: 200px; margin-left: 20px;" >
            <button type="submit" name="submit" class="btn btn-primary rounded-pill btn-lg mt-4" style="margin-left: 20px;" id="btn1">Search</button>
            <input type="submit" name="saubmit" value="Search" id="btn2" class="btn btn-primary rounded-pill btn-lg mt-4" style="margin-left: 20px;">

            
           </div>

        </center>
          
          
<br><br>
      </div>

    </div>
  </div>
</div><br>



<?php

 if (isset($_POST['submit'])) 
   {

  ?>

<div class="container mt-3">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;  border: none;">
        
        <table class="table">
           <thead>
  
    <th>Booking Id</th>
    <th>Name</th>
    <th>Train Name</th>
    <th>Train No.</th>
    <th>Seat Status</th>
    <th>TNF</th>
    <th>Action</th>
    
 </thead>
         
         <?php

        $conn = mysqli_connect("localhost","root","","railway");

       $book_id = $_POST['book_id'];

     $sql = " select * from book_t where ticki_id = '$book_id' ";

   $run = mysqli_query($conn,$sql);

   while ($row = mysqli_fetch_array($run)) 
   {

   ?>


<tbody>
   <tr>
          <td data-label="Booking Id"><?php echo $row['ticki_id']; ?></td>
          <td data-label="Name"><?php echo $row['f_name']; ?></td>
          <td data-label="Train Name"><?php echo $row['train_name']; ?></td>
          <td data-label="Train No."><?php echo $row['train_no']; ?></td>
          <td data-label="Seat Status"><?php
           
           if ($row['seat_con'] == "Waiting") 
           {
             ?>
                 <span style="color: #F71010;"><?php echo $row['seat_con']; ?></span>
             <?php
           }
           else
           {
            ?>
               <span style="color: #25B865;"><?php echo $row['seat_con']; ?></span>
            <?php 
           }

        ?>
        </td>
        <td data-label="TNF"><?php echo $row['train_type']; ?>-<?php echo $row['id']; ?>/<?php echo $row['train_coach']; ?>/<?php echo $row['seat_type']; ?></td>
        <td data-label="Action"><a href="vide_detailtick.php?id=<?php echo $row['ticki_id']; ?>"><input type="button" name="" value="View Detail" class="btn btn-primary rounded-pill"></a></td>
        </tr>
          </tbody>
        <?php } } ?>
</table>

      </div>
    </div>
  </div>
</div>

<?php 

if (isset($_POST['saubmit'])) 
{

  ?>

 
    <div class="container mt-3">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;  border: none;">
        
        <table class="table">
           <thead>
  
    <th>Train No.</th>
    <th>Train Name</th>
    <th>From</th>
    <th>To</th>
    <th>Arriving</th>
    <th>Despatch</th>
    
 </thead>
         
         <?php

        $conn = mysqli_connect("localhost","root","","railway");

       $t_from = $_POST['t_from'];

       $t_to = $_POST['t_to'];

     $sql = "  select * from train where t_from = '$t_from' and t_to = '$t_to' ";

   $run = mysqli_query($conn,$sql);

   while ($row = mysqli_fetch_array($run)) 
   {

   ?>


<tbody>
   <tr>
          <td data-label="Train No."><?php echo $row['t_no']; ?></td>
          <td data-label="Train Name"><a href="review.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;"><?php echo $row['t_name']; ?></a></td>
          <td data-label="From"><?php echo $row['t_from']; ?></td>
          <td data-label="To"><?php echo $row['t_to']; ?></td>
          <td data-label="Arriving"><?php echo $row['t_timearriving']; ?></td>
        <td data-label="Despatch"><?php echo $row['t_timedispatch']; ?></td>
        </tr>
          </tbody>
        <?php } } ?>
</table>

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
   document.getElementById("text2").style.display = "none";
       document.getElementById("text3").style.display = "none";
       document.getElementById("btn2").style.display = "none";

  function updateChar()
  {
    var zone = document.getElementById("zoneSelect");

   if (zone.value == "book")
   {
       document.getElementById("text1").style.display = "block";
       document.getElementById("btn1").style.display = "block";
       document.getElementById("btn2").style.display = "none";
       document.getElementById("text2").style.display = "none";
       document.getElementById("text3").style.display = "none";
   }
   if (zone.value == "train") 
   {

       document.getElementById("text1").style.display = "none";
       document.getElementById("text2").style.display = "block";
       document.getElementById("text3").style.display = "block";
       document.getElementById("btn2").style.display = "block";
       document.getElementById("btn1").style.display = "none";

   }
  }

</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>