
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Contact</title>
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

<form method="post">

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



<br>



<div class="container"> 
   <div class="row">
      <div class="col-md-12">
         <div class="container">
            <div style="background: #fff; border-radius: 10px;">
               
                  <br>
               <div class="container">
                 <h2>Contact Us</h2>
               </div>
             
               <div class="container"> 
                  <div class="row mt-4">
                     <div class="col-md-6">
                       
                       <p>Hello , Let's get in touch</p>

                       <h6 class="head_tex" style="padding-top: 10px;">Name</h6>
                       <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
                         <h6 class="head_tex" style="padding-top: 10px;">Phone Number</h6>
                         <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number">
                          <h6 class="head_tex" style="padding-top: 10px;">Email Id</h6>
                          <input type="text" class="form-control" name="email" placeholder="Enter Email Id">
                          <h6 class="head_tex" style="padding-top: 10px;">Description</h6>
                          <textarea class="form-control" name="compl" placeholder="Type Description"></textarea><br>
                          <input type="submit" name="submit" value="Send" class="btn rounded-pill" style="background: #2D84FB; color: #fff; width: 12rem;">


                     </div>
                     <div class="col-md-6">
                        <br><br><br>
                        <div class="container">
                          <h6 class="head_tex" style="padding-top: 10px;">Address</h6>
                        111,xyz,India

                        <h6 class="head_tex mt-4" style="padding-top: 10px;">Contact Us</h6>
                        <a href="tel:1515424787" style="color: #2F3C4E; text-decoration: none;">+91 1515424787</a>

                        <h6 class="head_tex mt-4" style="padding-top: 10px;">Email Id</h6>
                        <a href="mailto:railway@gmail.com" style="color: #2F3C4E; text-decoration: none;">railway@gmail.com</a>
                        </div>

                     </div>
                  </div>   
               </div>
               




<br>

               </div>
            </div>
        
      </div>
   </div>
</div>

<br>



            <?php
               
               $conn = mysqli_connect("localhost","root","","railway");

               if (isset($_POST['submit'])) 
               {
                 $name = $_POST['name'];
                 $phone = $_POST['phone'];
                 $email = $_POST['email'];
                 $compl = $_POST['compl'];

                 $sql = " insert into contact (name,phone,email,compl) values ('$name','$phone','$email','$compl') ";

                 if (mysqli_query($conn,$sql)) 
                 {
                  
                 }
                 else
                 {
                  echo "Not Done";
                 }


               }
          

            ?>




</form>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>