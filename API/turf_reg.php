
<?php
include 'connection.php';
$Turf_name=$_POST["Turf_name"];
$Turf_location=$_POST["Turf_location"];
$owner_acc=$_POST["owner_acc"];
$owner_name=$_POST["owner_name"];
//  $image=$_POST["image"];
$pic=$_FILES['image']['name'];
if($pic != "")
{
    $filearray=pathinfo($_FILES['image']['name']);
    $file1=rand();
   $file_ext=$filearray["extension"];

    $filenew=$file1 .".".$file_ext;


    move_uploaded_file($_FILES['image']['tmp_name'],"../img/".$filenew);

}

$Owner_email=$_POST["Owner_email"];
$owner_ph=$_POST["owner_ph"];
// $licence=$_POST["licence"];
$lic=$_FILES['image']['name'];
if($lic != "")
{
    $filearray=pathinfo($_FILES['image']['name']);
    $file1=rand();
   $file_ext=$filearray["extension"];

    $filenew1=$file1 .".".$file_ext;


    move_uploaded_file($_FILES['image']['tmp_name'],"../img/".$filenew1);

}
$password=$_POST["password"];
$rate=$_POST["rate"];
$status='register';
 $data=mysqli_query($con,"INSERT INTO `turf_tbl`(`Turf_name`, `Turf_location`, `owner_acc`, `owner_name`, `image`, `Owner_email`, `owner_ph`, `licence`,`rate`,`status`) VALUES ('$Turf_name','$Turf_location','$owner_acc','$owner_name','$filenew','$Owner_email','$owner_ph','$filenew1','$rate','$status')");
 mysqli_query($con,"INSERT INTO `login_tbl`(`uname`, `password`, `type`) VALUES ('$Owner_email','$password','turf')");
 if($data)
 {

  // $response['message']='sucess';
    $data1=mysqli_query($con,"select * from turf_tbl where Owner_email='$Owner_email'");
   $list=array();
   if(mysqli_num_rows($data1)>0)
   {
  $row=mysqli_fetch_assoc($data1);
   $myarray['Turf_id']=$row['Turf_id'];
    $myarray['Turf_name']=$row['Turf_name'];
    $myarray['Owner_email']=$row['Owner_email'];
    $myarray['user_type']='turf';
    $myarray['message']='sucess';
   array_push($list,$myarray);
   
  }
 }
 else
 {
    $myarray['message']="failed";
    array_push($list,$myarray);
  // $response['message']='fail';
 }
 
 echo json_encode($myarray);
//  echo json_encode($list);
