<?php
include 'connection.php';


$id=$_GET["id"];
mysqli_query($con,"UPDATE `turf_tbl` SET `status`='approve' WHERE  Turf_id='$id'");
header("location:manage_turf.php");
// echo "<script>alert('delete successfully')</script>";
?>
 