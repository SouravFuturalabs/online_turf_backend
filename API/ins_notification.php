<?php
include 'connection.php';
$Turf_id=$_POST["Turf_id"];
$Notification=$_POST["Notification"];
$data=mysqli_query($con,"INSERT INTO `notification_tbl`(`Turf_id`,`Notification`) VALUES ('$Turf_id','$Notification')"); 
if($data)
{
    $response['message']="sucess";
}
else
{
    $response['message']="failed";
}
echo json_encode($response);