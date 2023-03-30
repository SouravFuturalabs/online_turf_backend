
<?php
include 'connection.php';

$Turf_id=$_POST["Turf_id"];
$bdate=$_POST['bdate'];
$Cid=$_POST["Cid"];
$Book_status=$_POST["Book_status"];
$time_slot=$_POST["time_slot"];
$days_no=$_POST["days_no"];
$amount=$_POST["amount"];
$list=array();
// $data1=mysqli_query($con,"SELECT * FROM `book_tbl` WHERE Turf_id='$Turf_id' and bdate='$bdate' and time_slot='$time_slot'");
// if(mysqli_num_rows($data1)>0)
// {
//     $myarray['message']="booking failed"; 
// }
// else
// {
$data=mysqli_query($con,"INSERT INTO `book_tbl`(`Turf_id`, `Cid`, `Book_status`, `time_slot`, `days_count`,`bdate`,`amount`) VALUES ('$Turf_id','$Cid','$Book_status','$time_slot','$days_no','$bdate','$amount')");
if($data)
{
    $data1=mysqli_query($con,"select * from book_tbl where Cid='$Cid' and Turf_id='$Turf_id' and time_slot='$time_slot' and bdate='$bdate'");
    $row=mysqli_fetch_assoc(($data1));
    $myarray['Book_id']=$row['Book_id'];
   
}
else
{
    $myarray['message']="failed";
}
// }
echo json_encode($myarray);