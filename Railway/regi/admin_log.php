<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>LogIn Page</title>
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
					<div class="row">
						<div class="col-md-8">
							<img src="https://static-2.gumroad.com/res/gumroad-public-storage/variants/pt3170dxpj61yqd0is1ews5xembk/3298c3eb001bbed90f1d616da66708480096a0a1b6e81bd4f8a2d6e9b831d301" style="height: 510px; width: 80%;" class="imga">
						</div>
						<div class="col-md-4"><br><br>
							
							<h3>Welcome Back</h3>
							<h6 class="head_tex" style="padding-top: 0px;">Welcome to Railway Ticket Booking </h6>

							
							<div class="row">
								<div class="col-md-10 mt-3">
									<h6 class="head_tex" style="padding-top: 10px;">Email Id</h6>
							<input type="text" name="email" placeholder="Enter Email Id" class="form-control">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-10">
									<h6 class="head_tex" style="padding-top: 10px;">Password</h6>
							<input type="password" name="pass" placeholder="Enter Password" class="form-control">
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-md-10">
									<input type="submit" name="submit" value="Log In" class="btn rounded-pill" style="background: #2D84FB; color: #fff; width: 12rem;">
								</div>

							</div>
<h6 class="head_tex" style="padding-top: 12px;">I Dont Have Login Id ? <a href="index.php" style="text-decoration: none;">Back</a></h6>



						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php


$conn = mysqli_connect("localhost","root","","railway");

if (isset($_POST['submit'])) 
{
	
     $email = $_POST['email'];
     $pass = $_POST['pass'];

     
     $sql = " select * from admin_log where email = '$email' and pass = '$pass' ";

     $run = mysqli_query($conn,$sql);

     if (mysqli_num_rows($run)) 
     {
        header("location:../addtrains.php");
     }
     else
     {
     	echo "Please Check Username And Password";
     }
 

}


?>







</form>
	</body>
</html>