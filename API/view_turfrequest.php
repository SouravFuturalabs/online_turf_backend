<?php
include 'connection.php';
$Turf_id=$_POST["Turf_id"];
$data=mysqli_query($con,"SELECT * FROM `book_tbl` INNER JOIN custreg_tbl on custreg_tbl.Cid=book_tbl.Cid WHERE Turf_id='$Turf_id' and Book_status='pending'");
//  $row=mysqli_fetch_assoc(($data));

 $list=array();
 if(mysqli_num_rows($data)>0)
 {
    while($row=mysqli_fetch_assoc(($data)))
    { 
        $myarray['Book_id']=$row['Book_id'];
    $myarray['Cname']=$row['Cname'];
    $myarray['time_slot']=$row['time_slot'];
    $myarray['bdate']=$row['bdate'];
    $myarray['Book_status']=$row['Book_status'];
  
     array_push($list,$myarray);

}
 }
 else
 {
    $myarray['message']="failed";
     array_push($list,$myarray);

 }
 echo json_encode($list);

