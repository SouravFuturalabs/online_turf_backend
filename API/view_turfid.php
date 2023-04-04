<?php
include 'connection.php';
$Turf_id=$_POST["Turf_id"];
$data=mysqli_query($con,"select * from turf_tbl INNER join login_tbl on login_tbl.uname=turf_tbl.Owner_email where Turf_id='$Turf_id'");
 $row=mysqli_fetch_assoc(($data));

 $list=array();
 if(mysqli_num_rows($data)>0)
 {
    $myarray['Turf_id']=$row['Turf_id'];
    $myarray['Turf_name']=$row['Turf_name'];
    $myarray['Turf_location']=$row['Turf_location'];
    $myarray['owner_acc']=$row['owner_acc'];
    $myarray['owner_name']=$row['owner_name'];
    $myarray['image']= $row['image'];
    $myarray['Owner_email']=$row['Owner_email'];
    $myarray['owner_ph']=$row['owner_ph'];
    $myarray['licence']=$row['licence'];
    $myarray['password']=$row['password'];
    $myarray['rate']=$row['rate'];
    $myarray['truf_available']=$row['available'];
    $myarray['owner_photo']=$row['owner_photo'];
    // array_push($list,$myarray);

}
 else
 {
    $myarray['message']="failed";
    // array_push($list,$myarray);

 }
 echo json_encode($myarray);

