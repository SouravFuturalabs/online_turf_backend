<?php
include 'connection.php';
$Cid=$_POST["Cid"];
$data=mysqli_query($con,"SELECT * FROM `book_tbl` inner join turf_tbl ON book_tbl.Turf_id=turf_tbl.Turf_id WHERE Cid='$Cid' and Book_status!='cancel'");
//  $row=mysqli_fetch_assoc(($data));
 $list=array();
 if(mysqli_num_rows($data)>0)
 {
while($row=mysqli_fetch_assoc(($data)))
{
    $myarray['Book_id']=$row['Book_id'];
    $myarray['Turf_id']=$row['Turf_id'];
    $myarray['Turf_name']=$row['Turf_name'];
    
    $myarray['time_slot']=$row['time_slot'];
    $myarray['bdate']=$row['bdate'];
    
    array_push($list,$myarray);
}
}
 else
 {
    $myarray['message']="failed";
    array_push($list,$myarray);

 }
 echo json_encode($list);

