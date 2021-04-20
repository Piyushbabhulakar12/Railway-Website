<?php

session_start();

$_SESSION['usiw'];

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
	<title>Make Payment</title>
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




<div class="container mt-4">
       <div class="row">
              <div class="col-md-3 col-3 text-center">
                     <center>
                            <h5 class="round1" style="background: #2D84FB; color: #fff">1</h5>
                            <p class="text_p">Start</p>
                     </center>
              </div>
              <div class="col-md-3 col-3 text-center">
                     <center>
                            <h5 class="round1" style="background: #2D84FB; color: #fff">2</h5>
                            <p class="text_p">View Detail</p>
                     </center>
              </div>
              <div class="col-md-3 col-3 text-center">
                     <center>
                            <h5 class="round1">3</h5>
                            <p class="text_p">Payment</p>
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

<form method="post">



<div class="container mt-4">
       <div class="row">
          <div class="col-md-8">
              <div style="background: #fff; border-radius: 10px;">
                <div class="container">
                     <br>
                       <h2>Make Payment</h2>


                   <div class="row mt-3">
                      <div class="col-md-6">
                             <h6 class="head_tex" style="padding-top: 10px;">Cardholder Name</h6>
                             <input type="text" name="" class="form-control" required>
                      </div>
                   </div>

                   <div class="row mt-3">
                          <div class="col-md-5">
                                 <h6 class="head_tex" style="padding-top: 10px;">Card Number</h6>
                                 <input type="text" name="" class="form-control" required>
                          </div>
                           <div class="col-md-5">
                                 <h6 class="head_tex" style="padding-top: 10px;">Name Of Card</h6>
                                 <input type="text" name="" class="form-control" required>
                          </div>
                   </div>

                   <div class="row mt-3">
                          <div class="col-md-5">
                                 <h6 class="head_tex" style="padding-top: 10px;">Card Type</h6>
                                 <select name="" class="form-control">
                                        <option value="Debit Card">Debit Card</option>
                                        <option value="Credit Card">Credit Card</option>
                                 </select>
                          </div>
                          <div class="col-md-5">
                                 <h6 class="head_tex" style="padding-top: 10px;">Card Expirey</h6>
                                 <input type="month" name="" class="form-control" required>
                          </div>
                   </div>

                   <div class="row mt-3">
                          <div class="col-md-4">
                            <h6 class="head_tex" style="padding-top: 10px;">CVV</h6>
                                 <input type="password" name="" class="form-control" required>
                          </div>
                   </div>


                  <br>








                </div>
              </div>
          </div>
           <div class="col-md-4">
             <div style="background: #fff; border-radius: 10px;">
                   <div class="container">
                          <br>
                          <h4> Order Summary</h4>
<hr>
<?php

$uniq_id = $_SESSION['usiw'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select sum(price_t) AS sum from book_t where ticki_id = '$uniq_id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
?>




<div class="row">
       <div class="col-md-6">
             <h5>Total</h5>
       </div>
       <div class="col-md-6" style="text-align: right;"> 
              <h5><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['sum']; ?></h5>
       </div>
</div>
<hr>
<?php } ?>
 
 <center><input type="submit" name="submit" value="Confirm Ticket" class="btn btn-primary rounded-pill mt-3" style="width: 15rem;"></center>
<br>

                   </div>
              </div>
          </div>
       </div>
</div>




<?php

$uniq_id = $_SESSION['usiw'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " select sum(price_t) AS sum from book_t where ticki_id = '$uniq_id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
?>

       			<input type="hidden" name="" value="<?php echo $row['sum']; ?>" disabled>
       			<input type="hidden" name="total_price" value="<?php echo $row['sum']; ?>">
<?php } ?>
       		</td>

       	</tr>
       	<tr>
       		<th colspan="2"></th>
       	</tr>

       </table>


	</center>
</form>

<br><br>






<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>

<?php
 $isd = $_SESSION['usiw'];

$conn = mysqli_connect("localhost","root","","railway");

if (isset($_POST['submit'])) 
{
	
	$total_price = $_POST['total_price'];

	$sql = " update book_t set total_price = '$total_price' , payment = 'Successfully' where ticki_id = '$isd' ";

	if (mysqli_query($conn,$sql)) 
	{
              ?>

                 <script>
                        location.href = "sucessful.php";
                 </script>

              <?php
	}
	else
	{
		echo "Not Done";
	}
   

}

?>