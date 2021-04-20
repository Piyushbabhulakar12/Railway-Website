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

<form method="post">



<div class="container mt-4">
	<div class="row">
		<div class="col-md-3 col-3 text-center">
			<center>
				<h5 class="round1">1</h5>
				<p class="text_p">Start</p>
			</center>
		</div>
		<div class="col-md-3 col-3 text-center">
			<center>
				<h5 class="round2">2</h5>
				<p class="text_p1">View Detail</p>
			</center>
		</div>
		<div class="col-md-3 col-3 text-center">
			<center>
				<h5 class="round2">3</h5>
				<p class="text_p1">Payment</p>
			</center>
		</div>
		<div class="col-md-3 col-3 text-center">
			<center>
				<h5 class="round2">4</h5>
				<p class="text_p1">Done</p>
			</center>
		</div>
	</div>
</div>




<div class="container mt-3"> 
	<div class="row">
		<div class="col-md-12">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
					<h2>Book Ticket</h2>


 <?php


$conn = mysqli_connect("localhost","root","","railway");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$arun = mysqli_query($conn,$sql);

$rowdgsg = mysqli_fetch_array($arun);

$id = $rowdgsg['id'];

?>
<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select * from train where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>
    
                      <div class="row">
                      	<div class="col-md-12">
                      		<h6 class="head_tex" style="padding-top: 10px;">Type</h6>
                      <input type="radio" name="typea" value="GN" required checked> <label>General</label>
                      <input type="hidden" name="train_type" value="GN">
                      	</div>
                      
                      </div>


                      <div class="row mt-4">
                      	<div class="col-md-3">
                             <h6 class="head_tex" style="padding-top: 10px;">Train No.</h6>
                      		<?php echo $row['t_no']; ?>
			<input type="hidden" name="train_no" value="<?php echo $row['t_no']; ?>">
                      		
                      	</div>
                      	<div class="col-md-3">
                      		<h6 class="head_tex" style="padding-top: 10px;">Train Name</h6>
                      		<?php echo $row['t_name']; ?>
			<input type="hidden" name="train_name" value="<?php echo $row['t_name']; ?>">
                      	</div>
                      	<div class="col-md-3">
                      		<h6 class="head_tex" style="padding-top: 10px;">From</h6>
                      		<?php echo $row['t_from']; ?>
			<input type="hidden" name="train_from" value="<?php echo $row['t_from']; ?>">
                      	</div>
                      	<div class="col-md-3">
                      		<h6 class="head_tex" style="padding-top: 10px;">To</h6>
                      		<?php echo $row['t_to']; ?>
			<input type="hidden" name="train_to" value="<?php echo $row['t_to']; ?>">
                      	</div>
                      </div>


 <div class="row mt-4">
 	<div class="col-md-3">
 		<h6 class="head_tex" style="padding-top: 10px;">Journy Date</h6>
 		<input type="date" name="journy_date" class="form-control" required>
 	</div>
 </div>


<h2 class="mt-4" style="color: #CDD3DA; font-size: 25px;">Passenger Detail</h2>

 
 
<div class="row mt-3">
	<div class="col-md-5 d-flex">
		<select name="nuaam" class="form-control">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
</select>&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="subsum" value="Add Passenger" class="btn btn-primary rounded-pill" style="width: 19rem;">
	</div>
</div>

  <div class="row mt-4">
<?php

if (isset($_POST['subsum'])) 
{
	$num = $_POST['nuaam'];
 
  for ($i=1; $i <= $num; $i++) 
 { 
 
    ?>


   
     	<div class="col-md-6 mt-4"> 
     		<h6 class="head_tex_p">Passanger <?php echo $i; ?></h6>
     		<h6 class="head_tex" style="padding-top: 10px;">Name</h6>
     		<input type="text" name="f_name[]" > 
     		<h6 class="head_tex" style="padding-top: 15px;">Age</h6>
     		<input type="text" name="age[]" > 
     		<h6 class="head_tex" style="padding-top: 15px;">Phone Number</h6>
     		<input type="number" name="phone[]" > 
     		<h6 class="head_tex" style="padding-top: 15px;">Gender</h6>
        <div class="row">
          <div class="col-md-5">
            <select name="gender[]" class="form-control">
          <option>Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
          </div>
        </div>
     		

     		<div class="row">
     			<div class="col-md-5">
     				<h6 class="head_tex" style="padding-top: 15px;">Coach</h6>
     				<select name="train_coach[]" class="form-control">
 				<option>Select</option>
 				<option value="GN-1">GN-1</option>
 				<option value="GN-2">GN-2</option>
 				<option value="GN-3">GN-3</option>
 				<option value="GN-4">GN-4</option>
 			</select>
     			</div>
     			<div class="col-md-5">
     				<h6 class="head_tex" style="padding-top: 15px;">Seat Type</h6>
     				<select name="seat_type[]" class="form-control">
 				<option>Select</option>
 				<option>UP</option>
 				<option>BT</option>
 			</select>
     			</div>
     		</div><br><br>

     	</div>
    

     
 

    <?php

  }
  ?>
<br>
<center><input type="submit" name="book_tic" value="Book Now" class="btn btn-primary rounded-pill" style="width: 12rem;"></center>

  <?php


}

?> </div>







<br><br>

 





 





<!--Dont Touch--->

				</div>
			</div>
		</div>
	</div>
</div>



<center>

<?php


$conn = mysqli_connect("localhost","root","","railway");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$arun = mysqli_query($conn,$sql);

$rowdgsg = mysqli_fetch_array($arun);

$id = $rowdgsg['id'];

?>


	


<br>


<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select * from train where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


	




<input type="hidden" name="ticki_id" value="<?php echo $aaa = uniqid('Tic'); ?>">

<input type="hidden" name="price_t" value="<?php echo $row['t_rate']-100; ?>">




<?php


$conn = mysqli_connect("localhost","root","","railway");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$arun = mysqli_query($conn,$sql);

$rowdgsg = mysqli_fetch_array($arun);

$id = $rowdgsg['id'];

?>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</center>
</form>
</body>
</html>

<?php $aaa; ?>
<?php

$issd = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

if (isset($_POST['book_tic'])) 
{
	 
	 $f_name = $_POST['f_name'];
	 $age = $_POST['age'];
	 $gender = $_POST['gender'];
   $phone = $_POST['phone'];
	 $price_t = $_POST['price_t'];
     $ticki_id = $_POST['ticki_id'];
     $journy_date = $_POST['journy_date'];
     $train_no = $_POST['train_no'];
     $train_name = $_POST['train_name'];
     $train_from = $_POST['train_from'];
     $train_to = $_POST['train_to'];
     $train_type = $_POST['train_type'];
     $train_id = $_GET['id'];
     $train_coach = $_POST['train_coach'];
     $seat_type = $_POST['seat_type'];

    for ($i=0; $i<sizeof($f_name); $i++)
        {

       $sql = " insert into book_t (f_name,age,gender,phone,price_t,ticki_id,user_id,journy_date,train_no,train_name,train_from,train_to,train_type,train_id,train_coach,seat_type) values ('" . $f_name[$i] . "','" . $age[$i] . "','" . $gender[$i] . "','" . $phone[$i] . "','$price_t','$ticki_id','$id','$journy_date','$train_no','$train_name','$train_from','$train_to','$train_type','$train_id','" . $train_coach[$i] . "','" . $seat_type[$i] . "') ";

     	if (mysqli_query($conn,$sql)) 
     	{
     		   $_SESSION['usiw'] = $ticki_id;
           ?>

              <script>
                location.href = "vide_filldata.php";
              </script>

           <?php
     	}
     	else
     	{
     		echo "Not Done";
     	}
     }

}


?>
