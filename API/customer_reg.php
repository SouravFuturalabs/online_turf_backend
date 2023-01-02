
<?php
include 'connection.php';

$Cname=$_POST["Cname"];
$Caddress=$_POST["Caddress"];
$Cdob=$_POST["Cdob"];
$CPhone_no=$_POST["CPhone_no"];
$CEmail=$_POST["CEmail"];
$CPassword=$_POST["CPassword"];
 $data=mysqli_query($con,"INSERT INTO `custreg_tbl`(`Cname`, `Caddress`, `Cdob`, `CPhone_no`, `CEmail`) VALUES ('$Cname','$Caddress','$Cdob','$CPhone_no','$CEmail')");
 mysqli_query($con,"INSERT INTO `login_tbl`(`uname`, `password`, `type`) VALUES ('$CEmail','$CPassword','customer')");
 if($data)
 {
    $data1=mysqli_query($con,"select * from custreg_tbl where CEmail='$CEmail'");
   $list=array();

   if(mysqli_num_rows($data1)>0)
   {
   while($row=mysqli_fetch_assoc(($data1)))
 {
   $myarray['Cid']=$row['Cid'];
    $myarray['Cname']=$row['Cname'];
    $myarray['CEmail']=$row['CEmail'];
    $myarray['user_type']='customer';
   // array_push($list,$myarray);
   
  } 
 }
 else
 {
   $myarray['message']="failed";
   // array_push($list,$myarray);
 }

}
 echo json_encode($myarray);

