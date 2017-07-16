<!DOCTYPE html>
<html>
<head>
	<title>Final Staffpage</title>
</head>
<body>

</body>
</html>
<?php

include 'dbconnect.php';
$uid = $_POST['uname'];
$pass = $_POST['psw'] ;
echo $uid;
echo $pass;
if(isset($_POST["submit"]))
{
echo 'sadeswed';
if($_POST["login"]=="teacher")
{
$sql="SELECT * FROM teacher WHERE uname='$uid' AND pwd='$pass' ";
$res = mysqli_query($conn,$sql);
if(!$row=mysqli_fetch_assoc($res))
{
	echo "LOGIN FAILED";
}
else
{
	echo "LOGIN SUCCESSFUL";
	header("Location: teacherfinal.php");
}
}

if($_POST["login"]=="admin")
{
$sql="SELECT * FROM admin WHERE uname='$uid' AND pwd='$pass' ";
$res = mysqli_query($conn,$sql);
if(!$row=mysqli_fetch_assoc($res))
{
	echo "LOGIN FAILED";
}
else
{
	echo "LOGIN SUCCESSFUL";
	header("Location: adminhome.php");
}
}
}

?>