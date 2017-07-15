<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Child assessment</title>
        <style>
form {
    border: 3px solid #f1f1f1;
}
input[type=text] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover {
    opacity: 0.8;
}
.buttn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
/* Change styles for back and submit buttons */
@media screen and (max-width: 300px) {
    .buttn {
       width: 100%;
    }
}
</style>
<script type="text/javascript">

function validateForm()
{
	var a=document.lifeskill.id.value;
	var b=document.lifeskill.skill1.value;
	var c=document.lifeskill.skill2.value;
	var d=document.lifeskill.skill3.value;
	var e=document.lifeskill.skill4.value;
	var f=document.lifeskill.skill5.value;
	if(a==""||b==""||c==""||d==""||e==""||f=="")
		alert("Enter all the details");
}
</script>
    </head>
    <body>
        <form name="lifeskill" action="childassess.php" method="post"  onsubmit="validateForm()">
		  <b>Enter student ID:</b> <input type="text" name="id" value=""/><br>
            <b>Interacting with others:</b>
            <select name="skill1">
                <option value="SELECTED">-Select-</option>
                <option value="1">Does not yet do</option>
                <option value="2">Does with lots of help</option>
                <option value="3">Does with some help</option>
                <option value="4">Does with little help</option>
                <option value="5">Does independently</option>
            </select><br>
            <b>Comments:</b><input type="text" placeholder="Enter your comments"><br>
            <b>Overcoming difficulties and solving problems:</b>
            <select name="skill2">
                <option value="SELECTED">-Select-</option>
                <option value="1">Does not yet do</option>
                <option value="2">Does with lots of help</option>
                <option value="3">Does with some help</option>
                <option value="4">Does with little help</option>
                <option value="5">Does independently</option>
            </select><br>
            <b>Comments:</b><input type="text" placeholder="Enter your comments"><br>
            <b>Taking initiatives independently:</b>
            <select name="skill3">
                <option value="SELECTED">-Select-</option>
                <option value="1">Does not yet do</option>
                <option value="2">Does with lots of help</option>
                <option value="3">Does with some help</option>
                <option value="4">Does with little help</option>
                <option value="5">Does independently</option>
            </select><br>
            <b>Comments:</b><input type="text" placeholder="Enter your comments"><br>
            <b>Managing conflicts:</b>
            <select name="skill4">
                <option value="SELECTED">-Select-</option>
                <option value="1">Does not yet do</option>
                <option value="2">Does with lots of help</option>
                <option value="3">Does with some help</option>
                <option value="4">Does with little help</option>
                <option value="5">Does independently</option>
            </select><br>
            <b>Comments:</b><input type="text" placeholder="Enter your comments"><br>
            <b>Understanding and following instructions:</b>
            <select name="skill5">
                <option value="SELECTED">-Select-</option>
                <option value="1">Does not yet do</option>
                <option value="2">Does with lots of help</option>
                <option value="3">Does with some help</option>
                <option value="4">Does with little help</option>
                <option value="5">Does independently</option>
            </select><br>
            <b>Comments:</b><input type="text" placeholder="Enter your comments"><br>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="buttn">Back</button>
                <input type="submit" name="submit" value="submit" class="buttn"><br>
				<label for='uploaded_file'><b>Select A File To Upload:</b></label>
				<input type="file" name="uploadedfile">
            </div>
        </form>
		<?php
if(isset($_REQUEST["submit"]))
{
$id=$_REQUEST["id"];
$skill1=$_REQUEST["skill1"];
$skill2=$_REQUEST["skill2"];
$skill3=$_REQUEST["skill3"];
$skill4=$_REQUEST["skill4"];
$skill5=$_REQUEST["skill5"];
$conn=mysqli_connect("localhost","root") or die("could not connect".mysql_error());
$a=mysql_select_db("detail",$conn) or die("could not select database".mysql_error());
$q2= "CREATE table if not exists childskill(id varchar(20) primary key,skill1 int(10),skill2 int(10),skill3 int(10),skill4 int(10),skill5 int(10))";
mysql_query($q2);
$q1="INSERT into childskill values('".$id."','".$skill1."','".$skill2."','".$skill3."','".$skill4."','".$skill5."')";

mysql_query($q1);
echo($id);

//echo("entries made");
}
?>
    </body>
</html>