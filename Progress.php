<?php
$conn = new mysqli_connect("localhost","root","","learningcurve");
$sql_mcv1 = "SELECT * from mci_values1";
$sql_mcv2 = "SELECT * from mci_values2";
$sql_cv1 = "SELECT * from ChildVals1";
$sql_cv2 = "SELECT * from ChildVals2";
$sql_progress = "";
$res_mcv1 = $conn->query($sql_mcv1);
$res_mcv2 = $conn->query($sql_mcv2);
$res_cv1 = $conn->query($sql_cv1);
$res_cv2 = $conn->query($sql_cv2);
if($res_cv1->num_rows>0 && $res_cv2->num_rows>0 && $res_mcv1->num_rows>0 && $res_mcv2->num_rows>0)
{
    while($val_cv1=$res_cv1->fetch_assoc() || $val_cv2=$res_cv2->fetch_assoc() || $val_mcv1=$res_mcv1->fetch_assoc() || $val_mcv2=$res_mcv2->fetch_assoc())
    {
        $sql = "INSERT INTO Progress values('$val_cv1['id']','($val_cv1['skill1']-$val_cv2['skill1'])/$val_cv1['skill1']',
                        '($val_cv1['skill2']-$val_cv2['skill2'])/$val_cv1['skill2']','($val_cv1['skill3']-$val_cv2['skill3'])/$val_cv1['skill3']',
                        '($val_cv1['skill4']-$val_cv2['skill4'])/$val_cv1['skill4']','($val_cv1['skill5']-$val_cv1['skill5'])/$val_cv1['skill5']',
                        '($val_mcv1['mci1']-$val_mcv2['mci1'])/$val_mcv1['mci1']',
                        '($val_mcv1['mci2']-$val_mcv2['mci2'])/$val_mcv1['mci2']','($val_mcv1['mci3']-$val_mcv2['mci3'])/$val_mcv1['mci3']',
                        '($val_mcv1['mci4']-$val_mcv2['mci'])/$val_mcv1['mci4']','($val_mcv1['mci5']-$val_mcv1['mci5'])/$val_mcv1['mci5']')";
        $res = mysqli_query($conn,$sql);
    }
}