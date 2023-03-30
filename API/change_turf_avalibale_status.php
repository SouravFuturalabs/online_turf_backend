<?php
include 'connection.php';
$Turf=$_POST["turf_id"];
$Turf_status=$_POST['status'];
$data=mysqli_query($con,"UPDATE `turf_tbl` SET `available`='$Turf_status' WHERE Turf_id='$Turf'");
 if($data)
 {
$resonse['message']="sucess";
}
 else
 {
    $resonse['message']="failed";
 }
 echo json_encode($resonse);

