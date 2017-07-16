<?php
$conn = new mysqli("localhost","root","","learningcurve");
$sql = "SELECT v1.id AS id,(v2.mci1-v1.mci1)/v1.mci1 AS mci1,(v2.mci2-v1.mci2)/v1.mci2 AS mci2,(v2.mci3-v1.mci3)/v1.mci3 as mci3,(v2.mci4-v1.mci4)/v1.mci4 AS mci4,(v2.mci5-v1.mci5)/v1.mci5 AS mci5,(c2.skill1-c1.skill1)/c1.skill1 AS cv1,(c2.skill2-c1.skill2)/c1.skill2 AS cv2,(c2.skill3-c1.skill3)/c1.skill3 AS cv3,(c2.skill4-c1.skill4)/c1.skill4 AS cv4,(c2.skill5-c1.skill5)/c1.skill5 AS cv5 FROM mci_values1 v1,mci_values2 v2,childvals1 c1,childvals2 c2 where v1.id=v2.id and c1.id=c2.id and c1.id=v1.id";
$res = $conn->query($sql);

if($res->num_rows>0)
{
    while($val=$res->fetch_assoc()){
        $sql_insert = "INSERT INTO progress values('$val[id]','$val[mci1]','$val[mci2]','$val[mci3]','$val[mci4]','$val[mci5]','$val[cv1]','$val[cv2]','$val[cv3]','$val[cv4]',$val[cv5])";
        $conn->query($sql_insert);
    }
}
?>