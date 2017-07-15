<?php

include 'dbconnect.php';
$uid = $_POST['uname'];
$pass = $_POST['psw'] ;
echo $uid;
echo $pass;
echo 'sadeswed';
$sql="SELECT * FROM teacher WHERE uname='$uid' AND pwd='$pass' ";
$res = mysqli_query($conn,$sql);
if(!$row=mysqli_fetch_assoc($res))
{
	echo "LOGIN FAILED";
}
else
{
	echo "LOGIN SUCCESSFUL";
	header("Location: google.co.in");
}

?>