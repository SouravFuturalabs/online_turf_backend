<?php
include 'connection.php';
$Turf_id=$_POST["Turf_id"];
$data=mysqli_query($con,"SELECT * FROM `feedback_tbl` inner join custreg_tbl on custreg_tbl.Cid=feedback_tbl.Cid where Turf_id='$Turf_id'");
$list=array();
 if(mysqli_num_rows($data)>0)
 {
while($row=mysqli_fetch_assoc(($data)))
{  
    
    $myarray['Cname']=$row['Cname'];
    $myarray['Feedback']=$row['Feedback'];
    array_push($list,$myarray);
   
    
}}
else
 {
    $myarray['message']="failed";
    array_push($list,$myarray);

 
}
echo json_encode($list);