<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Teacher Homepage</title>

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
    <!--<form name="abc" action="studentreg.php">
      <input type="submit" name="Add student" value="Add student"/>
    </form>-->
    <?php
    $conn=mysql_connect("localhost","root","");
    $a=mysql_select_db("studentreg");
    $q="SELECT name from studentreg";
    $row=array();
    $result=mysql_query($q);
   // echo($result);
   /* if(mysql_num_rows($result)>0)
    {
    while($val=mysql_fetch_array($result))
{
echo "<a href=childassess.php>".$result;
}
}*/
//if($result)
//{
  echo ($result);
  while($row=mysql_fetch_array($result))
  {
    echo "<a href='childassess.php'>".$row["name"];

    }
  //}

?> 
  </body>
</html>