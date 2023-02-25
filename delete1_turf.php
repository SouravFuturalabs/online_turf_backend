<!-- <?php
include 'connection.php';


$id=$_GET["id"];
//     $data=mysqli_query($con,"SELECT * FROM `turf_tbl` where turf_id='$id'");
//  $row=mysqli_fetch_assoc($data);  
//  if(isset($_POST['submit']))
//  {
    //  $tid=$_POST['id'];
    // echo "<script>window.location.href='manage_turf.php';</script>";
mysqli_query($con,"UPDATE `turf_tbl` SET `status`='reject' WHERE  Turf_id='$id'");
header("location:manage_turf.php");
// echo "<script>alert('delete successfully')</script>";

//  }
?> -->
