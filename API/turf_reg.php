
<?php
include 'connection.php';

$Turf_name=$_POST["Turf_name"];
$Turf_location=$_POST["Turf_location"];
$owner_acc=$_POST["owner_acc"];
$owner_name=$_POST["owner_name"];
$image=$_POST["image"];
$Owner_email=$_POST["Owner_email"];
$owner_ph=$_POST["owner_ph"];
$licence=$_POST["licence"];
$password=$_POST["password"];
 $data=mysqli_query($con,"INSERT INTO `turf_tbl`(`Turf_name`, `Turf_location`, `owner_acc`, `owner_name`, `image`, `Owner_email`, `owner_ph`, `licence`) VALUES ('$Turf_name','$Turf_location','$owner_acc','$owner_name','$image','$Owner_email','$owner_ph','$licence')");
 mysqli_query($con,"INSERT INTO `login_tbl`(`uname`, `password`, `type`) VALUES ('$Owner_email','$password','turf')");
 if($data)
 {
    $response['message']="sucess";
}
 else
 {
    $response['message']="failed";
 }
 echo json_encode($response);
