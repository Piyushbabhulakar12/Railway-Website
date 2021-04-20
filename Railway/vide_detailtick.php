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
	<title>Sucessfully Booked Seat</title>
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


<div class="card-body" id="printare">

<div class="container mt-4">
	<div class="row">
		<div class="col-xl-12 col-12">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
                       
                       <div class="row">
                       	 <div class="col-md-3">
                       	 	 <h6 class="head_tex" style="padding-top: 10px;">Booking Id</h6>
                <span style="color: #25B865;"><?php echo $ddsa = $_GET['id']; ?></span>
                       	 </div>
                       	 <div class="col-xl-3 col-sm-6">
              <?php

$uniq_id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select * from book_t where ticki_id = '$uniq_id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$isa = $row['train_id'];

$user_id = $row['user_id'];



?>
               <h6 class="head_tex" style="padding-top: 10px;">Price Paid</h6>
               <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['total_price']; ?>

             </div>
             <div class="col-md-3"> 
             	<h6 class="head_tex" style="padding-top: 10px;">Book</h6>
             	 <span style="color: #25B865;">Successfull</span>
             </div>
                       </div>





                       <?php

$uniq_id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select * from book_t where ticki_id = '$uniq_id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$isa = $row['train_id'];

$user_id = $row['user_id'];



?>

<?php

$conn = mysqli_connect("localhost","root","","railway");

$aasql = " select * from train where id = '$isa' ";

$russn = mysqli_query($conn,$aasql);

$row_time = mysqli_fetch_array($russn);

?>


        
           <div class="row mt-3">
             <div class="col-md-3">
                <h6 class="head_tex" style="padding-top: 10px;">Date</h6>
               <?php echo $row['journy_date']; ?>
             </div>
             <div class="col-md-3">
               <h6 class="head_tex" style="padding-top: 10px;">Train No.</h6>
               <?php echo $row['train_no']; ?>
             </div>
             <div class="col-md-3">
               <h6 class="head_tex" style="padding-top: 10px;">Train Name</h6>
               <?php echo $row['train_name']; ?>
             </div>
              <div class="col-md-3">
               <h6 class="head_tex" style="padding-top: 10px;">Type</h6>
              <?php echo $row['train_type']; ?>
             </div>
           </div>

           <div class="row mt-3 mt-3">
             <div class="col-md-3">
               <h6 class="head_tex" style="padding-top: 10px;">From</h6>
               <?php echo $row['train_from']; ?>
             </div>
             <div class="col-md-3">
               <h6 class="head_tex" style="padding-top: 10px;">To</h6>
               <?php echo $row['train_to']; ?>
             </div>
             <div class="col-md-3">
               <h6 class="head_tex" style="padding-top: 10px;">Time Dispatch</h6>
               <?php echo $row_time['t_timearriving']; ?>
             </div>
             <div class="col-md-3">
               <h6 class="head_tex" style="padding-top: 10px;">Time Rich</h6>
               <?php echo $row_time['t_timedispatch']; ?>
             </div>
           </div>
 
<br>

<h2 class="head_tex_p">Passanger Detail</h2>

<div class="row">

<?php

$uniq_id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select * from book_t where ticki_id = '$uniq_id' ";

$run = mysqli_query($conn,$sql);

while ($raaa = mysqli_fetch_array($run)) 
{
  
?>


   
   	<div class="col-md-6">
   		<div class="row">
     <div class="col-md-6">
       <h6 class="head_tex" style="padding-top: 10px;">Seat No.</h6>
       <?php echo $raaa['id']; ?>
     </div>
     <div class="col-md-6">
       <h6 class="head_tex" style="padding-top: 10px;">Name</h6>
       <?php echo $raaa['f_name']; ?>
     </div>
     <div class="col-md-6">
       <h6 class="head_tex" style="padding-top: 10px;">Phone</h6>
       <?php echo $raaa['phone']; ?>
     </div>
     <div class="col-md-6">
       <h6 class="head_tex" style="padding-top: 10px;">Age</h6>
       <?php echo $raaa['age']; ?>
     </div>
   </div>     


   <div class="row">
     <div class="col-md-6">
       <h6 class="head_tex" style="padding-top: 10px;">Gender</h6>
       <?php echo $raaa['gender']; ?>
     </div>
     <div class="col-md-6">
       <h6 class="head_tex" style="padding-top: 10px;">Price</h6>
      <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $raaa['price_t']; ?>
     </div>
     <div class="col-md-6">
       <h6 class="head_tex" style="padding-top: 10px;">CNF</h6>
       <?php echo $raaa['train_type']; ?>-<?php echo $raaa['id']; ?>/<?php echo $raaa['train_coach']; ?>/<?php echo $raaa['seat_type']; ?>
     </div>
     <div class="col-md-6"> 
     	<h6 class="head_tex" style="padding-top: 10px;">Seat Status</h6>
       <?php
           
           if ($raaa['seat_con'] == "Waiting") 
           {
             ?>
                 <span style="color: #F71010;"><?php echo $raaa['seat_con']; ?></span>
             <?php
           }
           else
           {
           	?>
           	   <span style="color: #25B865;"><?php echo $raaa['seat_con']; ?></span>
           	<?php 
           }

        ?>
     </div>
   </div> 
   <div class="row mt-4">
   	<div class="col-md-12">
   		<form>
        <input type="button" name="" value="Cancel Ticket" onclick="myFunction()" class="btn" style="background: #F71010; color: #fff;">
      </form>
       <script>
function myFunction() {
  
  if (confirm("You want to Cancel Ticket")) {
    location.href = "cancel_ticket.php?id=<?php echo $raaa['id']; ?>";
  } else {
    
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

   	</div>
   </div>
   	</div>
   



<?php } ?>










</div>

<h2 class="head_tex_p mt-4">Customer Detail</h2>

<?php

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select * from regi where id = '$user_id' ";

$run = mysqli_query($conn,$sql);

while ($raaow = mysqli_fetch_array($run)) 
{
	

?>

<div class="row">
	<div class="col-md-3">
		<h6 class="head_tex" style="padding-top: 10px;">Name</h6>
<?php echo $raaow['f_name']; ?> <?php echo $raaow['l_name']; ?>
	</div>
	<div class="col-md-3">
		<h6 class="head_tex" style="padding-top: 10px;">Email</h6>
<?php echo $raaow['email']; ?>
	</div>
	<div class="col-md-3">
		
	</div>
	<div class="col-md-3">
		<h6 class="head_tex" style="padding-top: 10px;">Contact Number</h6>
		<?php echo $raaow['phone']; ?>
	</div>
</div>

<?php } ?>
<br>
<center><input type="button" name="" value="Print" onclick="printDiv('printare')" class="btn btn-primary"></center>
<br>
				</div>
			</div>
		</div>
	</div>
</div>



       
	



<script>
  
  function printDiv(printare)
  {

      var printcontents = document.getElementById(printare).innerHTML;
      var originalcontents = document.body.innerHTML;

      document.body.innerHTML = printcontents;
      window.print();
      document.body.innerHTML = originalcontents;

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>