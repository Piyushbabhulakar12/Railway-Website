<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<title>All Train</title>
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

.head_tex
{
	color: #969494;
	font-size: 13px;
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
.drop
{
  background-color: #fff;
  outline: none;
  border-radius: 50px;
  text-decoration: none;
  
  text-align: center;
  text-indent: 5px;
}
.span_tet
{
  text-align: center;
  margin-top: 30px;
  margin-right: 2px;
  margin-left: 10px;
}
.sra_top
{
  display: flex;
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
  .sra_top
   {
    display: block;
   }
   .drop
   {
    height: 40px;
   }
  
}
    </style>
	<title>Notification</title>
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
    <a class="nav-link nav_link" href="addtrains.php" style="color: #455A64; border-radius: 50px;">Add Train</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="alltrain.php" style="color: #455A64; border-radius: 50px;">All Train</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="seat_conf.php" style="color: #455A64; border-radius: 50px;">Seat Confirm</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="notification.php" style="color: #fff; border-radius: 50px; background: #2D84FB;">Notification</a>
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
					<h2>Notification</h2>
                   
                    
                    	<div class="row">
                    		<?php

       $conn = mysqli_connect("localhost","root","","railway");

       $sql = " select * from contact ";

       $run = mysqli_query($conn,$sql);

       while ($row = mysqli_fetch_array($run)) 
       {
		?>



        <div class="col-md-6 mt-3">
        	<h6 class="head_tex" style="padding-top: 10px;">Name</h6>
        	<?php echo $row['name']; ?>
        	<div class="row">
        		<div class="col-md-6">
        			<h6 class="head_tex" style="padding-top: 10px;">Phone</h6>
        	<?php echo $row['phone']; ?>
        		</div>
        		<div class="col-md-6">
        			<h6 class="head_tex" style="padding-top: 10px;">Email</h6>
        			<?php echo $row['email']; ?>
        		</div>
        	</div>
        	<h6 class="head_tex" style="padding-top: 10px;">Comment</h6>
        	<?php echo $row['compl']; ?>
        	
        </div>






	<?php } ?>
                    	
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