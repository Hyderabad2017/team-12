<?php

$conn  = mysqli_connect('localhost','root','','learningcurve');

if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}

?>