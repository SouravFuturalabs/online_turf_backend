<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT * FROM `notification_tbl`");
$list=array();
 if(mysqli_num_rows($data)>0)
 {
while($row=mysqli_fetch_assoc(($data)))
{  
    
    $myarray['Notify_id']=$row['Notify_id'];
    $myarray['Notification']=$row['Notification'];
    array_push($list,$myarray);
   
    
}}
else
 {
    $myarray['message']="failed";
    array_push($list,$myarray);

 
}
echo json_encode($list);