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
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Book Ticket</title>
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
.table td
{
  border:1px solid #ddd;
}
.table th
{
   border:1px solid #ddd;
  background: #ffff;
  color: #969494;
}
.nav_tt
{
  display: flex; 
  justify-content: center;
}
.span_tet
{
  text-align: center;
  margin-top: 10px;
  margin-right: 2px;
  margin-left: 10px;
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
  .nav_tt
{
  display: block; 
  justify-content: center;
}
.text_1
{
  
}
.text_1
{
  
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
    <a class="nav-link nav_link" href="resurvation.php" style="color: #fff; border-radius: 50px; background: #2D84FB;">Book Ticket</a>
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


<center>


<form method="post">


<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;">
<br>
  <br>

        <center>
          <div class="container">
            <div class="row">
          <div class="col-md-5 mt-3">
            <center><input type="text" name="t_from" placeholder="From Junction" class="form-control"></center>
          </div>
          
          <div class="col-md-5 mt-3">
            <input type="text" name="t_to" placeholder="From Junction" class="form-control">
          </div>
          <div class="col-md-2 mt-3">
            <input type="submit" name="submit" value="Search" class="btn btn-primary rounded-pill" >
          </div>
        </div>
          </div>
        </center>
 


      


<br>
  <br>
</div>
    </div>
  </div>
</div>



<br>
<?php

if (isset($_POST['submit'])) 
{

 ?>
 <div class="container">
    <div class="row">
      <div class="col-md-12">

           <table class="table">
             <thead>
              <td style="border-color: #ddd; color: #969494;">Train No.</td>
              <td style="border-color: #ddd; color: #969494;">Train Name</td>
              <td style="border-color: #ddd; color: #969494;">Train From</td>
              <td style="border-color: #ddd; color: #969494;">Train To</td>
              <td style="border-color: #ddd; color: #969494;">Arriving</td>
              <td style="border-color: #ddd; color: #969494;">Despatch</td>
              <td style="border-color: #ddd; color: #969494;">Book</td>
            </thead>

<?php

$conn = mysqli_connect("localhost","root","","railway");


   $t_from = $_POST['t_from'];
     $t_to = $_POST['t_to'];
     

      $sql = " select * from train where t_from = '$t_from' and t_to = '$t_to'";

      $run = mysqli_query($conn,$sql);

      while ($row = mysqli_fetch_array($run)) 
      {



?>

<tbody>
  <tr>
    <td data-label="Train No." style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_no']; ?></td>
    <td data-label="Train Name" style="border-color: #ddd; color: #2F3C4E;"><a href="review.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;"><?php echo $row['t_name']; ?></a></td>
      <td data-label="Train From" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_from']; ?></td>
      <td data-label="Train To" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_to']; ?></td>
      <td data-label="Arriving" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_timearriving']; ?></td>
      <td data-label="Despatch" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_timedispatch']; ?></td>
      <td data-label="Book"  style="border-color: #ddd; color: #2F3C4E;">
        <a href="bookt.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="SL" class="btn btn-sm" style="background: #2D84FB; color: #fff;"></a>
        <a href="ac.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="AC" class="btn btn-sm"></a>
        <a href="gen.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="GEN" class="btn btn-sm" style="background: #25B865;"></a>

      </td>
  </tr>
  </tbody>



<?php } }else
{
  ?>

   </table>

       <h2 class="mt-5"> <i class="fa fa-search" aria-hidden="true"></i> Search here Train</h2>


  <?php
} ?>

          
  
 </div>
      </div>
    </div>






  </form>
</center>








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