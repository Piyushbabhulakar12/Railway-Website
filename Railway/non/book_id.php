<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <title>Home Page</title>
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
  <a href="../non_regi.php">Home</a>
  <a href="find_train.php">Find Train</a>
 <a href="book_id.php">Booking Id</a>
 <a href="../regi/log.php">Sign Up</a>
 <a href="../regi/index.php">Registration</a>
 <a href="contact.php">Contact Us</a>
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
    <a class="nav-link nav_link" aria-current="page" href="../non_regi.php" style="color: #455A64; border-radius: 50px;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="find_train.php" style="color: #455A64; border-radius: 50px;">Find Train</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="book_id.php" style="color: #455A64; border-radius: 50px;">Booking Id</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="../regi/log.php" style="color: #455A64; border-radius: 50px;">Sign Up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="../regi/index.php" style="color: #455A64; border-radius: 50px;">Registration</a>
  </li>
</ul>
    </div>
  </div>
</nav>






<form method="post">

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">

<div style="background: #fff; border-radius: 10px;  border: none;">
<br><br>


   <center><div class="container">
      <div class="row">
        <div class="col-md-9 mt-4">
          <input type="text" name="book_id" placeholder="Enter Booking Id" class="form-control">
        </div>
        <div class="col-md-3 mt-4">
          <input type="submit" name="submit" value="Search" class="btn btn-primary rounded-pill" style="width: 12rem;" >
        </div>
    </div>
   </div></center>

<br><br>
</div>

      </div>
    </div>
  </div>

<?php 

 if (isset($_POST['submit'])) 
   {

?>


<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <center>
      <table class="table">
  <thead>
    <th>Booking Id</th>
    <th>Name</th>
    <th>Booking Id</th>
    <th>Train Name</th>
    <th>Train No.</th>
    <th>From City</th>
    <th>To City</th>
    <th>Journey Date</th>
    <th>Journey Type</th>
    <th>Seat Status</th>
    <th>TNF</th>
    <th>Total Price</th>
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
          <td data-label="Booking Id"><?php echo $row['id']; ?></td>
          <td data-label="Train Name"><?php echo $row['train_name']; ?></td>
          <td data-label="Train No."><?php echo $row['train_no']; ?></td>
          <td data-label="From City"><?php echo $row['train_from']; ?></td>
          <td data-label="To City"><?php echo $row['train_to']; ?></td>
          <td data-label="Journey Date"><?php echo $row['journy_date']; ?></td>
          <td data-label="Journey Type"><?php echo $row['train_type']; ?></td>
          <td data-label="Seat Status"><?php
           
           if ($row['seat_con'] == "Waiting") 
           {
             ?>
                 <span style="color: red;"><?php echo $row['seat_con']; ?></span>
             <?php
           }
           else
           {
            ?>
               <span style="color: green;"><?php echo $row['seat_con']; ?></span>
            <?php 
           }

        ?>
        </td>
        <td data-label="TNF"><?php echo $row['train_type']; ?>-<?php echo $row['id']; ?>/<?php echo $row['train_coach']; ?>/<?php echo $row['seat_type']; ?></td>
        <td data-label="Total Price"><?php echo $row['total_price']; ?></td>
        <td data-label="Action"><a href="vide_ndetailtick.php?id=<?php echo $row['ticki_id']; ?>"><input type="button" name="" value="View Detail" class="btn btn-primary rounded-pill"></a></td>
        </tr>
        </tbody>
        <?php } }else{

?>


</table>

   <center>    <h3 class="mt-5"><i class="fa fa-search" aria-hidden="true"></i> Search here Train</h3></center>


<?php

        } ?>
      </center>

    </div>
  </div>
</div>







</form>



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