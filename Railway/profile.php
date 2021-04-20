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
	<title>Setting Profile</title>
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
    <a class="nav-link nav_link" href="profile.php" style="background:#2D84FB; border-radius: 50px; color: #fff;">Profile</a>
  </li>
</ul>
    </div>
  </div>
</nav>




<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
			<div class="container">
              <div style="background: #fff; border-radius: 10px;">

	             <div class="container">
	             	
	             	<?php


$conn = mysqli_connect("localhost","root","","railway");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$arun = mysqli_query($conn,$sql);

$rowdgsg = mysqli_fetch_array($arun);

$id = $rowdgsg['id'];

?>


<?php

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select * from regi where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);


?>

<br>

<h3>Hi , <?php echo $row['f_name']; ?></h3>


<h2 class="head_tex_p mt-4">Account Setting</h2>

<div class="row mt-2">
	<div class="col-md-4">
		<h6 class="head_tex" style="padding-top: 10px;">First Name</h6>
		<input type="text" name="f_name" value="<?php echo $row['f_name']; ?>">
	</div>
	<div class="col-md-4">
		<h6 class="head_tex" style="padding-top: 10px;">Last Name</h6>
		<input type="text" name="l_name" value="<?php echo $row['l_name']; ?>">
	</div>
</div>

<div class="row mt-2">
	<div class="col-md-4">
		<h6 class="head_tex" style="padding-top: 10px;">Email Id</h6>
		<input type="text" name="email" value="<?php echo $row['email']; ?>">
	</div>
	<div class="col-md-4">
		<h6 class="head_tex" style="padding-top: 10px;">Phone Number</h6>
		<input type="text" name="phone" value="<?php echo $row['phone']; ?>">
	</div>
</div>

<div class="row mt-2">
	<div class="col-md-4">
		<h6 class="head_tex" style="padding-top: 10px;">Gender</h6>
		<input type="text" name="gender" value="<?php echo $row['gender']; ?>">
	</div>
	<div class="col-md-4">
		<h6 class="head_tex" style="padding-top: 10px;">Date Of Birth</h6>
		<input type="date" name="birth_date" value="<?php echo $row['birth_date']; ?>">
	</div>
</div>

<div class="row mt-2">
	<div class="col-md-6">
		<h6 class="head_tex" style="padding-top: 10px;">Address</h6>
		<textarea name="address" cols="40" rows="3"><?php echo $row['address']; ?></textarea>
	</div>
</div>
	    
	 <div class="row ">
	 	<div class="col-md-4">
	 		<h6 class="head_tex" style="padding-top: 10px;">City</h6>
	 		<input type="text" name="city" value="<?php echo $row['city']; ?>">
	 	</div>
	 	<div class="col-md-4">
	 		<h6 class="head_tex" style="padding-top: 10px;">State</h6>
	 		<input type="text" name="state" value="<?php echo $row['state']; ?>">
	 	</div>
	 </div>    

	 <div class="row mt-2">
	 	<div class="col-md-4">
	 		<h6 class="head_tex" style="padding-top: 10px;">Country</h6>
	 		<input type="text" name="country" value="<?php echo $row['country']; ?>">
	 	</div>
	 </div>    
<br>
	 <center><input type="submit" name="submit" value="Submit" class="btn rounded-pill" style="background: #2D84FB; color: #fff; width: 12rem;"></center>    




          

<br>







</div>

				</div>
			</div>
		</div>
	</div>
</div>


<br><br>



</form>


<?php

$conn = mysqli_connect("localhost","root","","railway");

if (isset($_POST['submit'])) 
{
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$birth_date = $_POST['birth_date'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];

 $sql = " update regi set f_name = '$f_name' , l_name = '$l_name' , email = '$email' , phone = '$phone' , gender = '$gender' , birth_date = '$birth_date' , address = '$address' , city = '$city' , state = '$state' , country = '$country' where id = '$id' ";

 if (mysqli_query($conn,$sql)) 
 {
 	
 }
 else
 {
 	echo "Not Done";
 }

}


?>


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