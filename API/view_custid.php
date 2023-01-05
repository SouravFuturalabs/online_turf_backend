<?php
include 'connection.php';
$Cid=$_POST["Cid"];
$data=mysqli_query($con,"SELECT * FROM `custreg_tbl`inner join login_tbl on custreg_tbl.CEmail=login_tbl.uname  WHERE custreg_tbl.Cid='$Cid'");
 $row=mysqli_fetch_assoc(($data));

 $list=array();
 if(mysqli_num_rows($data)>0)
 {

    $myarray['Cid']=$row['Cid'];
    $myarray['Cname']=$row['Cname'];
    $myarray['CEmail']=$row['CEmail'];
    $myarray['CPhone_no']=$row['CPhone_no'];
    $myarray['Cdob']=$row['Cdob'];
    $myarray['Caddress']=$row['Caddress'];
    $myarray['password']=$row['password'];
    // array_push($list,$myarray);

}
 else
 {
    $myarray['message']="failed";
    // array_push($list,$myarray);

 }
 echo json_encode($myarray);

