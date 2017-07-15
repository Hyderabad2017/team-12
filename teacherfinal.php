<?php

$conn  = mysqli_connect('localhost','root','','bookings');

if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>FINAL Teacher Homepage</title>

    <style type="text/css">
      #button {  /* Box in the button */
        display: block;
        width: 150px;
      }

      #button a {
        text-decoration: none;  /* Remove the underline from the links. */
      }

      #button ul {
        list-style-type: none;  /* Remove the bullets from the list */
      }

      #button .top {
        background-color: #DDD;  /* The button background */
      }

      #button ul li.item {
        display: none;  /* By default, do not display the items (which contains the links) */
      }  

      #button ul:hover .item {  /* When the user hovers over the button (or any of the links) */
        display: block;
        border: 1px solid black;
        background-color: #EDC;
      }
    </style>
  </head>
  <body>
	
	<div style="text-align:center"><img src="http://learning-curve-foundation.org/wp-content/uploads/2016/01/Learinng-curve-web.png" width = "300" height = "200"></div>
	<h1><div style="text-align:center">Welcome</div></h1>
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
<form name="import" method="POST" enctype="multipart/form-data">
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
$dept = $filesop[2];
$sal = $filesop[3];
$sql = "INSERT INTO mytask (id,name,dept,sal) VALUES ('$id','$name','$dept','$sal')";
$res = mysqli_query($conn,$sql);
$c = $c + 1;
}

if($sql){
echo "You database has imported successfully. You have inserted ". $c ." records";
$query="SELECT * from mytask";
$res=mysqli_query($conn,$query)or die("query failed");
echo "<table border=1 align=center>";
echo "<tr>";
echo "<th>id</th><th>name</th><th>dept</th><th>sal</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res))
{ 
	echo "<tr><td>",$row['id'],"</td>";
	//echo "<td>",$row['name'],"</a></td>";
	//echo "<td><a href="childassess.php?res=$id1">".$row['name']."</a></td>";
		
	echo "<td>".$row['name']."</td>";
	//echo " <a href="childassess.php?res=$id1".".$row['name']."</a>";
	//<a href="?php echo "http://www.someotherwebsite.com"; "

	echo "<td>",$row['dept'],"</td>";
	echo "<td>",$row['sal'],"</td></tr>";
	//echo "<td><input type="submit" name="$id1" value="Click to enter details"></td>";
}
}
else{
echo "Sorry! There is some problem.";
}
}
?>
</div>	
  </body>
</html>