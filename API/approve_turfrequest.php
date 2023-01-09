<?php
include 'connection.php';
$Book_id=$_POST["Book_id"];
$Book_status=$_POST['status'];
$data=mysqli_query($con,"UPDATE `book_tbl` SET `Book_status`='$Book_status' WHERE Book_id='$Book_id'");
 if($data)
 {
$resonse['message']="sucess";
}
 else
 {
    $resonse['message']="failed";
 }
 echo json_encode($resonse);

