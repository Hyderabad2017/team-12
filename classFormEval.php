<?php
$Qnum = 1;
$id=$_POST['id'];
echo $id;
$MCI_Values = array(0,0,0,0,0);
$MCI_Attributes = array('S','F','Cm','D','Ch');
while($Qnum<26)
{
	if(isset($_POST["q".$Qnum]))
	{
	if($_POST["q".$Qnum]=="Yes")
		$MCI_Values[$Qnum%5] = $MCI_Values[$Qnum%5] + 3;
	elseif($_POST["q".$Qnum]=="No")
		$MCI_Values[$Qnum%5] = $MCI_Values[$Qnum%5] + 1;
	}
	else
		$MCI_Values[$Qnum%5] = $MCI_Values[$Qnum%5] + 2;
	$Qnum++;
}
$index = 0;
while($index<5)
{
	$MCI_Values[$index] = $MCI_Values[$index]/5;
	$index++;
}
$sql = "INSERT INTO mci_values1 VALUES ('$id','$MCI_Values[0]','$MCI_Values[1]','$MCI_Values[2]','$MCI_Values[3]','$MCI_Values[4]')";
$conn = mysqli_connect('localhost','root','','bookings');
$res = mysqli_query($conn,$sql);
?>