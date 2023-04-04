
<?php
include 'connection.php';

$Cname=$_POST["Cname"];
$Caddress=$_POST["Caddress"];
$Cdob=$_POST["Cdob"];
$CPhone_no=$_POST["CPhone_no"];
$CEmail=$_POST["CEmail"];
$CPassword=$_POST["CPassword"];
$customer_photo =$_FILES['customer_photo']['name'];
$id_proof =$_FILES['idproof']['name'];
if($id_proof != "")
{
    $filearray=pathinfo($_FILES['idproof']['name']);
    $file1=rand();
   $file_ext=$filearray["extension"];

    $filenew1=$file1 .".".$file_ext;


    move_uploaded_file($_FILES['idproof']['tmp_name'],"../img/".$filenew1);

}

if($customer_photo != "")
{
    $filearray=pathinfo($_FILES['customer_photo']['name']);
    $file1=rand();
   $file_ext=$filearray["extension"];

    $filenew2=$file1 .".".$file_ext;


    move_uploaded_file($_FILES['customer_photo']['tmp_name'],"../img/".$filenew2);

}
 $data=mysqli_query($con,"INSERT INTO `custreg_tbl`(`Cname`, `Caddress`, `Cdob`, `CPhone_no`, `CEmail`,`customer_photo`,`idproof`) VALUES ('$Cname','$Caddress','$Cdob','$CPhone_no','$CEmail','$filenew2','$filenew1')");
 mysqli_query($con,"INSERT INTO `login_tbl`(`uname`, `password`, `type`) VALUES ('$CEmail','$CPassword','customer')");
 if($data)
 {
    $data1=mysqli_query($con,"select * from custreg_tbl where CEmail='$CEmail'");
   $list=array();

   if(mysqli_num_rows($data1)>0)
   {
   while($row=mysqli_fetch_assoc(($data1)))
 {
   $myarray['Cid']=$row['Cid'];
    $myarray['Cname']=$row['Cname'];
    $myarray['CEmail']=$row['CEmail'];
    $myarray['user_type']='customer';
    $myarray['message']='sucess';
   // array_push($list,$myarray);
   
  } 
 }
 else
 {
   $myarray['message']="failed";
   // array_push($list,$myarray);
 }

}
 echo json_encode($myarray);

