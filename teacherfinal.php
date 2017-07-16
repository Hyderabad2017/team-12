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
 
 
 
 
 <div style="text-align:center"><!--<img src="http://learning-curve-foundation.org/wp-content/uploads/2016/01/Learinng-curve-web.png" width = "300" height = "200"></div>-->
	<h style="font-family:Algerian;font-size:200%"><font color=#000000><bold>WELCOME MENTOR!</bold></font></h>
	<?php

$conn  = mysqli_connect('localhost','root','','learningcurve');

if(!$conn)
{
  die("Connection failed: ".mysqli_connect_error());
}

?>
  <body>
  
  <div style="text-align:center"><!--<img src="http://learning-curve-foundation.org/wp-content/uploads/2016/01/Learinng-curve-web.png" width = "300" height = "200">-->
  
  
  </div>
  <!--<h1><div style="text-align:center">Welcome</div></h1>-->
   <!-- <div id="button">
      <ul>
        <h2><div style="text-align:center"><li class="top">Options</li></div></h2>
        <li class="item"><a href="">Edit Profile</a></li>
        <li class="item"><a href="">Settings</a></li>
        <li class="item"><a href="">Logout</a></li>
      </ul>
    </div>-->
  <div style="text-align:left; border:1px solid #333333; width:300px; margin:0 auto; padding:10px;"">
    <form name="abc" action="studentreg.php">
      <div style="text-align:center"><input type="submit" name="Add student" value="Add student"/>  OR </div>
    </form><br>
<form name="import" method="post" enctype="multipart/form-data">
<input type="file" name="file" /><br /><br>
<input type="submit" name="submit" value="Submit" />
</form>
</div>
<div style="text-align:center;">
<?php
if(isset($_POST["submit"]))
{
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{
$id = $filesop[0];
$name = $filesop[1];
$age = $filesop[2];
$class= $filesop[3];
$sql = "INSERT INTO sdata (sid,name,age,class) VALUES ('$id','$name','$age','$class')";
$res = mysqli_query($conn,$sql);
$c = $c + 1;
}

if($sql){
//echo "You database has imported successfully. You have inserted ". $c ." records";
$query="select * from sdata";
$res=mysqli_query($conn,$query)or die("query failed");
//echo "<table border=1 align=center>";
//echo "<tr>";
//echo "id"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."name"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."dept"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."sal<br>";
//echo "</tr>";
while($row=mysqli_fetch_array($res))
{
  $id1=$row['sid']; 
  echo $row['sid']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  echo $row['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  echo $row['age']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  echo $row['class']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  echo "<a href='childassess.php?id=$id1'>Click to enter details</a>";
  echo "<br>";

}
}
else
{
echo "Sorry! There is some problem.";
}
}
?>
</div>  
  </body>
  
    
  
</body>
</html>
