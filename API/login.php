
<?php
include 'connection.php';



$uname=$_POST["user_name"];

$pwd=$_POST["password"];

 $data=mysqli_query($con,"SELECT * FROM `login_tbl` WHERE uname='$uname' and password='$pwd'");
 $row=mysqli_fetch_assoc(($data));
 if(mysqli_num_rows($data)>0)
 {

   // mysqli_query($con,"INSERT INTO `attendence_tb`(`Van_id`, `Date`) VALUES ('$a','$date')");
    $response['type']=$row['type'];
   
}
 else
 {
    $response['type']="failed";
 }
 echo json_encode($response);
