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
@media only screen and (max-width: 600px) {
  .baasd
  {
    display: none;
  }
  }
	</style>
	<title>Dashboard</title>
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
    <a class="nav-link nav_link" aria-current="page" href="home.php" style="color: #fff; border-radius: 50px; background: #2D84FB;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="addtrains.php" style="color: #455A64; border-radius: 50px;">Add Train</a>
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


<br>


<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			 <div style="background: #fff; border-radius: 10px;">
			 	<div class="container">
			 		<br>
			 		<h2>Dashboard</h2>

			 		<h2 class="mt-4" style="color: #CDD3DA; font-size: 25px;">Overview</h2>

			 		


 



<br>


			 	</div>
			 </div>
		</div>
	</div>
</div>




<div class="container">
  <div class="row">
    <div class="col-md-12">
     
      
          

              <?php
                     
                     $conn = mysqli_connect("localhost","root","","railway");

                     $sql = " select sum(total_price) AS sum from book_t ";
                      
                     $run = mysqli_query($conn,$sql);

                     $row = mysqli_fetch_array($run);


          ?>


                    <div class="container mt-3">
                      <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                          <div style="background: #fff; border-radius: 15px;" >
                            <div class="container">
                              <h6 class="head_tex" style="padding-top: 25px;">Price</h6>
                          <h2><?php echo $row['sum']; ?></h2><br>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                          <div style="background: #fff; border-radius: 15px;" >
                            <div class="container">
                          <h6 class="head_tex" style="padding-top: 25px;">Train</h6>
                          <?php
                     
                     $conn = mysqli_connect("localhost","root","","railway");

                     $saql = " select * from train ";
                      
                     $ruaan = mysqli_query($conn,$saql);

                     $to_tr = mysqli_num_rows($ruaan);


          ?>
          <h2><?php echo $to_tr; ?></h2><br>
          </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                          <div style="background: #fff; border-radius: 25px;" >
                            <div class="container">
                          <h6 class="head_tex" style="padding-top: 25px;">Pending</h6>
                          <?php
                     
                     $conn = mysqli_connect("localhost","root","","railway");

                     $sql = " select * from book_t where seat_con = 'Waiting' ";
                      
                     $zzrun = mysqli_query($conn,$sql);

                     $to_ptr = mysqli_num_rows($zzrun);


          ?>
          <h2><?php echo $to_ptr; ?></h2><br>
          </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                          <div style="background: #fff; border-radius: 15px;" >
                            <div class="container">
                          <h6 class="head_tex" style="padding-top: 25px;">Feedback</h6>

                          <?php
                     
                     $conn = mysqli_connect("localhost","root","","railway");

                     $sql = " select * from contact";
                      
                     $zzrun = mysqli_query($conn,$sql);

                     $toa_ptr = mysqli_num_rows($zzrun);


          ?>
<h2><?php echo $toa_ptr; ?></h2><br>
</div>
                          </div>
                        </div>
                      </div>
                    </div>





       
    
    </div>
  </div>
</div>
















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