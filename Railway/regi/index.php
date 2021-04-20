<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Registration</title>
	<style type="text/css">
		 body
      {
        font-family: 'Poppins', sans-serif;
        background: #F4F9FF;
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
.imga
{
	display: none;
}
.btoo
{
    text-align: center;
}
}
	</style>
</head>
<body>



<form method="post">


<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
					
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h3>Registration</h3>
                                 
                                 <div class="row mt-4">
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">First Name</h6>
                                 <input type="text" name="f_name" placeholder="Enter First Name" class="form-control" required>
                                 	</div>
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">Last Name</h6>
                                 		<input type="text" name="l_name" placeholder="Enter Last Name" class="form-control" required>
                                 	</div>
                                 </div>

                                 <div class="row mt-1">
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">Email Id</h6>
                                 		<input type="text" name="email" placeholder="Enter Email Name" class="form-control" required>
                                 	</div>
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">Phone Number</h6>
                                 		<input type="text" name="phone" placeholder="Enter Phone Name" class="form-control" required>
                                 	</div>
                                 </div>

                                 <div class="row mt-1">
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">Password</h6>
                                 		<input type="password" name="pass" placeholder="Enter Password" class="form-control" required>
                                 	</div>
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">Confirm Password</h6>
                                 		<input type="password" name="cpass" placeholder="Enter Confirm Password" class="form-control" required>
                                 	</div>
                                 </div>

                                 <div class="row mt-1">
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">Gender</h6>
                                 		<input type="radio" name="gender" value="Male"> <label>Male</label>&nbsp
                                 		<input type="radio" name="gender" value="Female"> <label>Female</label>
                                 	</div>
                                 	<div class="col-md-6">
                                 		<h6 class="head_tex" style="padding-top: 10px;">Date of Birth</h6>
                                 		<input type="date" name="birth_date" class="form-control">
                                 	</div>
                                 </div>

<br>
                                <div class="btoo"> <input type="submit" name="submit" value="Registration" class="btn rounded-pill" style="background: #2D84FB; color: #fff; width: 12rem;"><br>
                                 <h6 class="head_tex" style="padding-top: 12px;">I Have an account ? <a href="log.php" style="text-decoration: none;">Sign Up</a></h6></div>
<br><br>



							</div>
							<div class="col-md-6">
								<img src="https://static-2.gumroad.com/res/gumroad/1211634803146/asset_previews/7fae28c65fc1366320b504d8436c5372/retina/gamer-monochrome-thumbnail.png" style="height: 500px" class="imga">
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>


</form>





	

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>

<?php

$conn = mysqli_connect("localhost","root","","railway");

if (isset($_POST['submit'])) 
{
	$f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
     
     $pass = md5($pass);
     $cpass = md5($cpass);



    $sql = " insert into regi (f_name,l_name,email,phone,pass,cpass,gender,birth_date) values ('$f_name','$l_name','$email','$phone','$pass','$cpass','$gender','$birth_date') ";

    if (mysqli_query($conn,$sql)) 
    {
    	
    }
    else
    {
    	echo "Not Done";
    }


}

?>