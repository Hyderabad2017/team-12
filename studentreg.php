<html>
<head><title>Student Registration</title></head>
<body>
	<h>Enter student credentials</h>
	<form name="entry details" action="">
	Enter student ID <input type="text" name="id" value=""/><br>
	Enter student name <input type="text" name="name" value=""/><br>
	Enter gender: <input type="radio" name="gender" value="male"/>Male<input type="radio" name="gender" value="female"/>Female<br>
	Enter age <input type="text" name="age" value=""/><br>
	Enter parental status <input type="text" name="status" value=""/><br>
	Enter family type <input type="text" name="familytype" value=""/><br>
	Enter no. of siblings <input type="text" name="siblings" value=""/><br>
	Enter order of birth <input type="text" name="birthorder" value=""/><br>
	Enter parent education level<input type="text" name="educationlevel" value=""/><br>
	Enter family income <input type="text" name="income" value=""/><br>
	<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_REQUEST["submit"]))
{


$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
$gender=$_REQUEST["gender"];
$age=$_REQUEST["age"];
$status=$_REQUEST["status"];
$familytype=$_REQUEST["familytype"];
$siblings=$_REQUEST["siblings"];
$birthorder=$_REQUEST["birthorder"];
$educationlevel=$_REQUEST["educationlevel"];
$familyincome=$_REQUEST["familyincome"];










$conn=mysql_connect("localhost","root") or die("could not connect".mysql_error());
$a=mysql_select_db("informationdb",$conn) or die("could not select database".mysql_error());
//$q1="create table if not exists student1(id varchar(20),name varchar(10),class varchar(5))";
$q1="insert into tablename values('".$id."','".$name."','".$gender."','".$age."','".$status."','".$familytype."','".$siblings."','".$birthorder."','".$educationlevel."','".$familyincome."')";
mysql_query($q1);
}
?>
</body>
</html>



