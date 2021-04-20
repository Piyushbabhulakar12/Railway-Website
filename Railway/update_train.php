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
	<title>Update Train</title>
</head>
<body>


<center>
	<form method="post">

		<table class="table">
	<thead>
		<th>Train No</th>
		<th>Train Name</th>
		<th>Train Rate</th>
		<th>Train Date</th>
		<th>Train From</th>
		<th>Train To</th>
		<th>Train Arriving</th>
		<th>Train Dispatch</th>
		<th>Mon</th>
		<th>Thu</th>
		<th>Wed</th>
		<th>Thurs</th>
		<th>Fri</th>
		<th>Sat</th>
		<th>Sun</th>
		<th>Action</th>
	</thead>

      <?php
        
       $id = $_GET['id'];

        $conn = mysqli_connect("localhost","root","","railway");

        $sql = " select * from train where id = '$id' ";

        $run = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_array($run))
        {

        	
        	
      ?>

    <tbody>
    <tr>
    	<td data-label="Train No"><input type="text" name="t_no" value="<?php echo $row['t_no']; ?>"  style="width: 50px;"></td>
    	<td data-label="Train Name"><input type="text" name="t_name" value="<?php echo $row['t_name']; ?>" style="width: 120px;"></td>
    	<td data-label="Train Rate"><input type="text" name="t_rate" value="<?php echo $row['t_rate']; ?>" style="width: 40px;"></td>
    	<td data-label="Train Date"><input type="date" name="t_date" value="<?php echo $row['t_date']; ?>" style="width: 120px;"></td>
    	<td data-label="Train From"><input type="text" name="t_from" value="<?php echo $row['t_from']; ?>" style="width: 120px;"></td>
    	<td data-label="Train To"><input type="text" name="t_to" value="<?php echo $row['t_to']; ?>" style="width: 120px;"></td>
    	<td data-label="Train Arriving"><input type="time" name="t_timearriving" value="<?php echo $row['t_timearriving']; ?>"style="width: 100px;"> </td>
    	<td data-label="Train Dispatch"><input type="time" name="t_timedispatch" value="<?php echo $row['t_timedispatch']; ?>" style="width: 100px;"></td>
    	<td data-label="Mon"><input type="text" name="mon" value="<?php echo $row['mon']; ?>"  style="width: 20px;"></td>
    	<td data-label="Thu"><input type="text" name="thu" value="<?php echo $row['thu']; ?>" style="width: 20px;"></td>
    	<td data-label="Wed"><input type="text" name="wed" value="<?php echo $row['wed']; ?>" style="width: 20px;"></td>
    	<td data-label="Thurs"><input type="text" name="thurs" value="<?php echo $row['thurs']; ?>" style="width: 20px;"></td>
    	<td data-label="Fri"><input type="text" name="fri" value="<?php echo $row['fri']; ?>" style="width: 20px;"></td>
    	<td data-label="Sat"><input type="text" name="sat" value="<?php echo $row['sat']; ?>" style="width: 20px;"></td>
    	<td data-label="Sun"><input type="text" name="sun" value="<?php echo $row['sun']; ?>" style="width: 20px;"></td>
    	<td data-label="Action"><input type="submit" name="update" value="Save" class="btn  rounded-pill" style="background: #25B865; color: #fff;" ></a></td>
    </tr>
       </tbody>  
         	
        

  <?php } ?>
   </table>

		
	</form>
</center>


<?php

$saaid = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

if (isset($_POST['update'])) 
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

    $sql = " update train set t_no = '$t_no', t_name = '$t_name' , t_rate = '$t_rate', t_date = '$t_date' , t_from = '$t_from', t_to = '$t_to' , t_timearriving = '$t_timearriving' , t_timedispatch = '$t_timedispatch' , mon = '$mon' , thu = '$thu ' , wed = '$wed' , thurs = '$thurs' , fri = '$fri' , sat = '$sat' , sun = '$sun' where id = '$saaid' ";

    if (mysqli_query($conn,$sql)) 
    {
        ?>
         
         <script>
              location.href = "alltrain.php";
         </script>

        <?php 
    }
    else
    {
    	echo "Not Done";
    }

}

?>







</body>
</html>