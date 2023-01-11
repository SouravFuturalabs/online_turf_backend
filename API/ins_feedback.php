<?php
include 'connection.php';
$Turf_id=$_POST["Turf_id"];
$Cid=$_POST["Cid"];
$Feedback=$_POST["Feedback"];
$data=mysqli_query($con,"INSERT INTO `feedback_tbl`(`Cid`, `Feedback`,`Turf_id`) VALUES ('$Cid','$Feedback','$Turf_id')"); 
if($data)
{
    $response['message']="sucess";
}
else
{
    $response['message']="failed";
}
echo json_encode($response);