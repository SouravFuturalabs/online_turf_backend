<?php
include 'connection.php';
$sql=mysqli_query($con,"SELECT * FROM notification_tbl join turf_tbl on notification_tbl.Turf_id = turf_tbl.Turf_id");
$list=array();
 if(mysqli_num_rows($sql)>0)
 {
while($row=mysqli_fetch_assoc(($sql)))
{  
    
    $myarray['Notify_id']=$row['Notify_id'];
    $myarray['Notification']=$row['Notification'];
    $myarray['Turfid']=$row['Turf_id'];
    $myarray['Turf_name']=$row['Turf_name'];
    $myarray['Turf_location']=$row['Turf_location'];
    $myarray['owner_ph']=$row['owner_ph'];
    

    
   
    // $myarray['Turf_id']=$row['Turf_id'];
   
    // $myarray['Turf_location']=$trufdata['Turf_location'];
    // $myarray['owner_ph']=$trufdata['owner_ph'];
    array_push($list,$myarray);
   
    
}}
else
 {
    $myarray['message']="failed";
    array_push($list,$myarray);

 
}
echo json_encode($list);



// <?php
// include 'connection.php';
// $data=mysqli_query($con,"SELECT * FROM `notification_tbl`");
// $list=array();
//  if(mysqli_num_rows($data)>0)
//  {
// while($row=mysqli_fetch_assoc(($data)))
// {  
    
//     $myarray['Notify_id']=$row['Notify_id'];
//     $myarray['Notification']=$row['Notification'];
//     $myarray['Turfid']=$row['Turf_id'];
//     $turfId=$row['Turf_id'];
//    $trufdata=mysqli_query($con,"SELECT * FROM `turf_tbl` where 'Turf_id' ='$turfId'");
//    if(mysqli_num_rows($trufdata)>0){
//     while($row1=mysqli_fetch_assoc(($trufdata))){
//         $myarray['Turf_name']=$row1['Turf_name'];

//     }
//    }
   
//     // $myarray['Turf_id']=$row['Turf_id'];
   
//     // $myarray['Turf_location']=$trufdata['Turf_location'];
//     // $myarray['owner_ph']=$trufdata['owner_ph'];
//     array_push($list,$myarray);
   
    
// }}
// else
//  {
//     $myarray['message']="failed";
//     array_push($list,$myarray);

 
// }
// echo json_encode($list);