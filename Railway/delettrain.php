<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","railway");

$sql = " delete from train where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
  header("location:alltrain.php");
}
else
{
	echo "Not Done";
}

?>