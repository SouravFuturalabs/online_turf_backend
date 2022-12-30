
<?php
include 'connection.php';

$Cname=$_POST["Cname"];
$Caddress=$_POST["Caddress"];
$Cdob=$_POST["Cdob"];
$CPhone_no=$_POST["CPhone_no"];
$CEmail=$_POST["CEmail"];
$CPassword=$_POST["CPassword"];
 $data=mysqli_query($con,"INSERT INTO `customer_tbl`(`Cname`, `Caddress`, `Cdob`, `CPhone_no`, `CEmail`) VALUES ('$Cname','$Caddress','$Cdob','$CPhone_no','$CEmail')");
 mysqli_query($con,"INSERT INTO `login_tbl`(`uname`, `password`, `type`) VALUES ('$CEmail','$CPassword','customer')");
 if($data)
 {
    $response['message']="sucess";
}
 else
 {
    $response['message']="failed";
 }
 echo json_encode($response);
