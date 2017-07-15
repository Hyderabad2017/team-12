<?php
// the name of the file you're writing to

$conn=mysql_connect("localhost","root");
$a=mysql_select_db("informationdb",$conn);
$q="select * from cost";
$result=mysql_query($q);
$arr="";
//echo($result);
if(mysql_num_rows($result)>0)
{
	while($row=mysql_fetch_array($result))
		//echo $row["crop"].",".$row["cost"].",".$row["yield"]."<br>";
		$arr.= $row["crop"].",".$row["cost"].",".$row["yield"]."\n";

}
echo($arr);
$myFile = "data.csv";

// opens the file for appending (file must already exist)
$fh = fopen($myFile, 'a');

// Makes a CSV list of your post data
//$comma_delmited_list = implode(",", $arr) . "\n";
$comma_delmited_list = $arr."\n";


// Write to the file
fwrite($fh, $comma_delmited_list);

// You're done
fclose($fh);
?>