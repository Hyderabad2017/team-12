<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 <body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #000000;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #000000;
  }
  .bg-3 { 
      background-color: #000000; /* White */
      color:#000000;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #000000;
  }-->
  .container-fluid {
      padding-top: 70px;
      padding-bottom:600px;
	  background-color:#EAECEE;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
	  background-color:#922B21;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
	  /*font-color:#000000;*/
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
		
      </button>-->
	        <h class="navbar-brand" style="font-family:Algerian;font-size:450%"><font color=#ffffff><bold>LEARNING CURVE</bold></font></h>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">WHO</a></li>
        <li><a href="#">WHAT</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>-->
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
 <center> 
  <!--<h2>Signup Form</h2>

<form action="signupinsert.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter your Mobile Number" name= "mobile" required><br>

    <br><br><label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name= "psw" required>
	<br><br>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	<br><br>
    <label><b>Enter Class</b></label>
    <input type="text" placeholder="Enter Class" name="class" required><br>
      <br><br><button type="submit" name="signup" class="signupbtn">Sign Up</button>-->
	  <center><!--<img src="http://learning-curve-foundation.org/wp-content/uploads/2016/01/Learinng-curve-web.png" width = "300" height = "200">-->
	  <!--<h><b>WELCOME ADMIN</b></h>-->
	  	        <h style="font-family:Algerian;font-size:200%"><font color=#000000><bold>WELCOME ADMIN</bold></font></h>
<br><br><br>

	<a href="DataVisualization.php">Click here to view the assessment</a>
	<br><br>
	
	<a href="ClassRoomAssesment.html">Click here to enter the assessment</a>
	</center>
	<?php
	if(isset($_REQUEST["button1"]))
		header("location:childassess.php");
	if(isset($_REQUEST["button2"]))
		header("location:ClassRoomAssesment.html");
	?>
	
	<a href="logintest.html">Logout</a>
    

  </div>
</form>
</center>
  
  <!--<h3 class="margin">Who Am I?</h3>-->
 <!-- <img src="bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">-->
  <!--<h3>I'm an adventurer</h3>-->
</div>

<!-- Second Container -->
<!--<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>-->

<!-- Third Container (Grid) -->
<!--<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>-->

<!-- Footer -->
<!--<footer class="container-fluid bg-4 text-center">-->
  <!--<p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> -->
<!--</footer>-->

</body>
</html>
