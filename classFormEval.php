<?php
$Qnum = 1;
$MCI_Values = array(0,0,0,0,0);
$MCI_Attributes = array('S','F','Cm','D','Ch');

while($Qnum<26)
{
	if($_POST[''.$Qnum]=='Yes')
		$MCI_Values[$Qnum%5] = $MCI_Values[$Qnum%5] + 3;
	elseif($_POST[''.$Qnum]=='No')
		$MCI_Values[$Qnum%5] = $MCI_Values[$Qnum%5] + 1;
	else
		$MCI_Values[$Qnum%5] = $MCI_Values[$Qnum%5] + 2;
	$Qnum++;
}
$index = 0;
while($index<5)
{
	$MCI_Values[$index] = $MCI_Values[$index]/5;
	$index++;
	echo($MCI_Values[$index]);
}
?>