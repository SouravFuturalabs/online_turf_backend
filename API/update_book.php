<?php
include 'connection.php';
$Book_id=$_POST["Book_id"];
$Book_status=$_POST["Book_status"];
$data=mysqli_query($con,"UPDATE `book_tbl` SET `Book_status`='$Book_status' WHERE Book_id='$Book_id'");
 $response['message']="sucess";
 echo json_encode($response);