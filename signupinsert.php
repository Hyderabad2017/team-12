<?php

//include 'dbc.php';
include 'dbconnect.php';
echo "entered";
	echo "entered if";
	$uname = $_POST['mobile'];
	$pass = $_POST['psw'];	
	$class=$_POST['class'];
	echo $uname ;
	echo $pass ;
	echo $class ;
	$sql="INSERT INTO teacher (uname,pwd,class) VALUES ('$uname', '$pass', '$class' )";
	$res = mysqli_query($conn,$sql);
	echo "inserted";

//header("Location: staffpage.php");
?>