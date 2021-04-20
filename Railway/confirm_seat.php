<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " update book_t set seat_con = 'Confirm' where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:seat_conf.php");
}
else
{
	echo "Not DOne";
}


?>