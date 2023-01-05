<?php
include 'connection.php';
$Cid=$_POST["Cid"];

$CEmail=$_POST["CEmail"];

$Cname=$_POST["Cname"];
$Caddress=$_POST["Caddress"];
$Cdob=$_POST["Cdob"];
$CPhone_no=$_POST["CPhone_no"];
$newemail=$_POST["newemail"];
$password=$_POST["password"];
$data=mysqli_query($con,"UPDATE `custreg_tbl` SET `Cname`='$Cname',`Cdob`='$Cdob',`CPhone_no`='$CPhone_no',`CEmail`='$newemail',`Caddress`='$Caddress' WHERE Cid='$Cid'");
mysqli_query($con,"UPDATE `login_tbl` SET `uname`='$newemail',`password`='$password' WHERE uname='$CEmail'");
$list=array();
$data1=mysqli_query($con,"SELECT * FROM `custreg_tbl`inner join login_tbl on custreg_tbl.CEmail=login_tbl.uname  WHERE custreg_tbl.Cid='$Cid'");
while($row=mysqli_fetch_assoc(($data1)))
{
    
    $myarray['Cid']=$row['Cid'];
    $myarray['Cname']=$row['Cname'];
    $myarray['CEmail']=$row['CEmail'];
    $myarray['CPhone_no']=$row['CPhone_no'];
    $myarray['Cdob']=$row['Cdob'];
    $myarray['Caddress']=$row['Caddress'];
    $myarray['password']=$row['password'];
    $myarray['message']="sucess";
}

 
echo json_encode($myarray);
