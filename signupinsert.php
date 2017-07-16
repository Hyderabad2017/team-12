<!DOCTYPE html>
<html>
<head>
	<title>FINAL SIGNUP INSERT</title>
</head>
<body>

</body>
</html>
<?php

//include 'dbc.php';
include 'dbconnect.php';
	$uname = $_POST['mobile'];
	$pass = $_POST['psw'];	
	$class=$_POST['class'];

	$query=" SELECT * FROM teacher WHERE uname='$uname' OR class='$class' ";
	$result=mysqli_query($conn,$query);
	$row=array();
	if($row=mysqli_fetch_array($result) > 0)
	{
		echo "SAME VALUES CANT BE INSERTED";
	}
	else
	{
		$sql="INSERT INTO teacher (uname,pwd,class) VALUES ('$uname', '$pass', '$class' )";
		$res = mysqli_query($conn,$sql);
		//echo "inserted";
		header("Location: teacherfinal.php");
	}


?>