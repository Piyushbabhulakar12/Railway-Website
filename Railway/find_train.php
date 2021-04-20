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
	<title>Find Train</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<style type="text/css">
		#text3
		{
          display: none;
		}
		#text4
		{
          display: none;
		}
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
    <a class="nav-link nav_link" href="find_train.php" style="color: #fff; border-radius: 50px; background: #2D84FB;">Find Train</a>
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





<center>




<br>


<form method="post">

  <div class="container">
    <div class="row">
      <div class="col-md-12">

  

        
<div style="background: #fff; border-radius: 10px;  border: none;">
  <br>
        <div class="sra_top">
  <select onclick="updateChar()" id="zoneSelect" class="drop mt-4">
      <option>Select</option>
      <option value="numa">Train Number</option>
      <option value="loc">Train Location</option>
      <option value="namea">Train Name</option>
    </select>
  <input type="text" name="t_from" id="text1" placeholder="From Junction" class="form-control  mt-4" style="margin-left: 10px;"> <span id="spani" class="span_tet">To</span> <input type="text" name="t_to" id="text2" placeholder="To Junction" class="form-control mt-4" style="margin-left: 10px;">
    <input type="text" name="t_no" id="text3" placeholder="Train Number" class="form-control  mt-4" style="margin-left: 10px;"><input type="text" name="t_name" id="text4" placeholder="Train Name" class="form-control  mt-4" style="margin-left: 10px;">
         <input type="submit" name="submit" value="Search" class="btn btn-primary rounded-pill  mt-4" style="margin-left: 10px;">
         
         
          <input type="text" name="" id="text3">
          </div>
<br><br>

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
      <th style="border-color: #ddd;">Train No.</th>
   	 	<th style="border-color: #ddd;">Train Name</th>
   	 	<th style="border-color: #ddd;">From</th>
   	 	<th style="border-color: #ddd;">To</th>
   	 	<th style="border-color: #ddd;">Arriving</th>
   	 	<th style="border-color: #ddd;">Despatch</th>
   	 	<th style="border-color: #ddd;">M</th>
   	 	<th style="border-color: #ddd;">T</th>
   	 	<th style="border-color: #ddd;">W</th>
   	 	<th style="border-color: #ddd;">T</th>
   	 	<th style="border-color: #ddd;">F</th>
   	 	<th style="border-color: #ddd;">S</th>
   	 	<th style="border-color: #ddd;">S</th>
   </thead>


<?php

$conn = mysqli_connect("localhost","root","","railway");

	
     
     $t_from = $_POST['t_from'];
     $t_to = $_POST['t_to'];
     $t_no = $_POST['t_no'];
     $t_name = $_POST['t_name'];
 
     $sql = " select * from train where t_from = '$t_from' and t_to = '$t_to' or t_no = '$t_no' or t_name = '$t_name' ";

     $run = mysqli_query($conn,$sql);

     while ($row = mysqli_fetch_array($run)) 
     {
     	
   
?>


   
   <tbody>
    <tr>
    	<td data-label="Train No." style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_no']; ?></td>
    	<td data-label="Train Name" style="border-color: #ddd;"><a href="review.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;"><?php echo $row['t_name']; ?></a></td>
    	<td data-label="From" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_from']; ?></td>
    	<td data-label="To" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_to']; ?></td>
    	<td data-label="Arriving" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_timearriving']; ?></td>
    	<td data-label="Despatch" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['t_timedispatch']; ?></td>
    	<td data-label="M" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['mon']; ?></td>
    	<td data-label="T" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['thu']; ?></td>
    	<td data-label="W" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['wed']; ?></td>
    	<td data-label="T" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['thurs']; ?></td>
    	<td data-label="F" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['fri']; ?></td>
    	<td data-label="S" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['sat']; ?></td>
    	<td data-label="S" style="border-color: #ddd; color: #2F3C4E;"><?php echo $row['sun']; ?></td>
    </tr>
  </tbody>

  









<?php

} }else
{
	?>

	 </table>

       <h3 class="mt-5"><i class="fa fa-search" aria-hidden="true"></i> Search here Train</h3>

	<?php
}

?>



        </div>
      </div>
    </div>





<script>
	
function updateChar()
{

           var zone = document.getElementById("zoneSelect");

           if (zone.value == "numa") 
           {
            
               document.getElementById("text1").style.display = "none";
               document.getElementById("text2").style.display = "none";
               document.getElementById("spani").style.display = "none";
               document.getElementById("text3").style.display = "block";
               document.getElementById("text4").style.display = "none";

           }

           if (zone.value == "loc") 
           {
           	   document.getElementById("text1").style.display = "block";
               document.getElementById("text2").style.display = "block";
               document.getElementById("spani").style.display = "block";
               document.getElementById("text3").style.display = "none";
           }

           
            if (zone.value == "namea") 
           {
            
               document.getElementById("text1").style.display = "none";
               document.getElementById("text2").style.display = "none";
               document.getElementById("spani").style.display = "none";
               document.getElementById("text3").style.display = "none";
               document.getElementById("text4").style.display = "block";

           }



}

</script>


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