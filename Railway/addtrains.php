
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<title>Add Train</title>
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
	</style>
</head>
<body>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="addtrains.php">Add Train</a>
  <a href="alltrain.php">All Train</a>
  <a href="seat_conf.php">Seat Confirm</a>
  <a href="notification.php">Notification</a>
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
    <a class="nav-link nav_link" aria-current="page" href="home.php" style="color: #455A64; border-radius: 50px;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="addtrains.php" style="color: #fff; border-radius: 50px; background: #2D84FB;">Add Train</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="alltrain.php" style="color: #455A64; border-radius: 50px;">All Train</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="seat_conf.php" style="color: #455A64; border-radius: 50px;">Seat Confirm</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="notification.php" style="color: #455A64; border-radius: 50px;">Notification</a>
  </li>
</ul>
    </div>
  </div>
</nav>



<form method="post"> 


<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
					<h2>Add Trains</h2>

                    
                    <div class="row mt-2">
                    	<div class="col-md-3 mt-2">
                    		<h6 class="head_tex" style="padding-top: 10px;">Train Number</h6>
                    		<input type="Number" name="t_no" placeholder="Enter Train Number" class="form-control" required>
                    	</div>
                    	<div class="col-md-3 mt-2">
                    		<h6 class="head_tex" style="padding-top: 10px;">Train Name</h6>
                    		<input type="text" name="t_name" placeholder="Enter Train Name" class="form-control" required>
                    	</div>
                    	<div class="col-md-3 mt-2">
                    		<h6 class="head_tex" style="padding-top: 10px;">Train Ticket Rate</h6>
                    		<input type="Number" name="t_rate" placeholder="Enter Ticket Rate" class="form-control" required>
                    	</div>
                    	<div class="col-md-3 mt-2">
                    		<h6 class="head_tex" style="padding-top: 10px;">Date</h6>
                    		<input type="date" name="t_date" class="form-control" required>
                    	</div>
                    </div>
                     
                     <div class="row mt-2">
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Train From</h6>
                     		<input type="text" name="t_from" placeholder="Enter From Train Des" class="form-control" required>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Train To</h6>
                     		<input type="text" name="t_to" placeholder="Enter To Train" class="form-control" required>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Arriving Time</h6>
                     		<input type="time" name="t_timearriving" class="form-control" required>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Time Take to Reach There Time</h6>
                     		<input type="time" name="t_timedispatch" class="form-control" required>
                     	</div>
                     </div>

                     <div class="row mt-2">
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Monday</h6>
                     		<select name="mon" class="form-control">
						<option>Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Thusday</h6>
                     		<select name="thu" class="form-control">
						<option>Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Wednesday</h6>
                     		<select name="wed" class="form-control">
						<option>Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Thursday</h6>
                     		<select name="thurs" class="form-control">
						<option>Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
                     	</div>
                     </div>

                     <div class="row mt-2">
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Friday</h6>
                     		<select  name="fri" class="form-control">
						<option>Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Saturday</h6>
                     		<select  name="sat" class="form-control">
						<option>Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
                     	</div>
                     	<div class="col-md-3 mt-2">
                     		<h6 class="head_tex" style="padding-top: 10px;">Sunday</h6>
                     		<select  name="sun" class="form-control">
						<option>Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
                     	</div>
                     	<div class="col-md-3">
                     		
                     	</div>
                     </div>
<br>
                     <center><input type="submit" name="submit" value="Add Train" class="btn btn-primary rounded-pill" style="width: 12rem;" id="liveToastBtn"></center>








<br>


				</div>
			</div>
		</div>
	</div>
</div>


</form>










<?php

$conn = mysqli_connect("localhost","root","","railway");

if (isset($_POST['submit'])) 
{
	
     $t_no = $_POST['t_no'];
     $t_name = $_POST['t_name'];
     $t_rate = $_POST['t_rate'];
     $t_date = $_POST['t_date'];
     $t_from = $_POST['t_from'];
     $t_to = $_POST['t_to'];
     $t_timearriving = $_POST['t_timearriving'];
     $t_timedispatch = $_POST['t_timedispatch'];
     $mon = $_POST['mon'];
     $thu = $_POST['thu'];
     $wed = $_POST['wed'];
     $thurs = $_POST['thurs'];
     $fri = $_POST['fri'];
     $sat = $_POST['sat'];
     $sun = $_POST['sun'];

     $sql = " insert into train (t_no,t_name,t_rate,t_date,t_from,t_to,t_timearriving,t_timedispatch,mon,thu,wed,thurs,fri,sat,sun) values ('$t_no','$t_name','$t_rate','$t_date','$t_from','$t_to','$t_timearriving','$t_timedispatch','$mon','$thu','$wed','$thurs','$fri','$sat','$sun') ";

     if (mysqli_query($conn,$sql)) 
     {
     	?>

    <div class="container">
       <div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Added Train Successfully
    </div>
     <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
  </div>
</div>
    </div>


     	<?php
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


<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>