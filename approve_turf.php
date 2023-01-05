<?php
include 'connection.php';

$tid=$_GET['id'];
mysqli_query($con,"UPDATE `turf_tbl` SET `status`='approve' WHERE  Turf_id='$tid'");
// echo "<script>alert('delete successfully')</script>";
 echo "<script>window.location.href='manage_turf.php';</script>";
?>
