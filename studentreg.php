<html>
<head><title>Student Registration</title>

<script type="text/javascript">

/*function validateForm() {
    var x = document.entrydetails.id.value;
    if (x == "") 
        alert("Enter id");

       // return false;
            var y = document.entrydetails.name.value;
    if (y == "") 
        alert("Enter name");
    
       //return false;
        var z = document.entrydetails.gender.value;
    if (z == "") 
        alert("Enter gender ");
        var a = document.entrydetails.age.value;
    
    if (a == "") 
        alert("Enter age");
    
    var b = document.entrydetails.status.value;
    if (b == "") 
        alert("Enter status");

var c = document.entrydetails.familytype.value;
    if (c == "") 
        alert("Enter familytype");
    
    var d = document.entrydetails.siblings.value;
    if (d == "") 
        alert("Enter siblings");
    
    var e= document.entrydetails..value;
    if (x == "") 
        alert("Enter name");*/
</script>
</head>
<body>
	<h>Enter student credentials</h>
	<form name="entrydetails" action="" method="post" onsubmit="validateForm()">
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
$familyincome=$_REQUEST["income"];

$conn=mysql_connect("localhost","root") or die("could not connect".mysql_error());
$a=mysql_select_db("cfg",$conn) or die("could not select database".mysql_error());
$q2="create table if not exists studentreg(id varchar(20),name varchar(30),gender varchar(1),age varchar(2),status varchar(20),familytype varchar(20),siblings varchar(3),birthorder varchar(3),educationlevel varchar(20),familyincome varchar(20))";
$q1="insert into tablename values('".$id."','".$name."','".$gender."','".$age."','".$status."','".$familytype."','".$siblings."','".$birthorder."','".$educationlevel."','".$familyincome."')";
mysql_query($q1);
}
?>
</body>
</html>



