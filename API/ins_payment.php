<?php
include 'connection.php';
$B_id=$_POST["B_id"];
$payment_type=$_POST["payment_type"];
$card_no=$_POST["card_no"];
$expiry_date=$_POST["expiry_date"];
$CVV=$_POST["CVV"];
$holder_name=$_POST["holder_name"];
$amount=$_POST["amount"];
$data=mysqli_query($con,"INSERT INTO `payment_tbl`(`B_id`, `payment_type`, `card_no`, `expiry_date`, `CVV`, `holder_name`, `amount`) VALUES ('$B_id','$payment_type','$card_no','$expiry_date','$CVV','$holder_name','$amount')"); 
if($data)
{
    $response['message']="sucess";
}
else
{
    $response['message']="failed";
}
echo json_encode($response);