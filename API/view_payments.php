<?php
include 'connection.php';
$Book_id=$_POST["book_id"];
$data=mysqli_query($con,"SELECT * FROM `payment_tbl`  where B_id='$Book_id'");


 $list=array();
 if(mysqli_num_rows($data)>0)
 {
    while($row=mysqli_fetch_assoc(($data)))
    { 
        $myarray['B_id']=$row["B_id"];
        $myarray['payment_type']=$row["payment_type"];
        $myarray['card_no']=$row["card_no"];
        $myarray['expiry_date']=$row["expiry_date"];
        $myarray['CVV']=$row["CVV"];
        $myarray['holder_name']=$row["holder_name"];
        $myarray['amount']=$row["amount"];
  
     array_push($list,$myarray);

}
 }
 else
 {
    $myarray['message']="failed";
     array_push($list,$myarray);

 }
 echo json_encode($list);

