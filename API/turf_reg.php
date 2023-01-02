
<?php
include 'connection.php';

$Turf_name=$_POST["Turf_name"];
$Turf_location=$_POST["Turf_location"];
$owner_acc=$_POST["owner_acc"];
$owner_name=$_POST["owner_name"];
$image=$_POST["image"];

$pic=$_FILES['f1']['name'];
// if($pic!="")
// {
    $filearray=pathinfo($_FILES['f1']['name']);
    $file1=1;
   $file_ext=$filearray["extension"];

    $filenew=$file1 .".".$file_ext;


    move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$filenew);

// }



$Owner_email=$_POST["Owner_email"];
$owner_ph=$_POST["owner_ph"];
$licence=$_POST["licence"];
$password=$_POST["password"];
 $data=mysqli_query($con,"INSERT INTO `turf_tbl`(`Turf_name`, `Turf_location`, `owner_acc`, `owner_name`, `image`, `Owner_email`, `owner_ph`, `licence`) VALUES ('$Turf_name','$Turf_location','$owner_acc','$owner_name','$image','$Owner_email','$owner_ph','$licence')");
 mysqli_query($con,"INSERT INTO `login_tbl`(`uname`, `password`, `type`) VALUES ('$Owner_email','$password','turf')");
 if($data)
 {
    $data1=mysqli_query($con,"select * from turf_tbl where Owner_email='$Owner_email'");
   $list=array();
   if(mysqli_num_rows($data1)>0)
   {
   while($row=mysqli_fetch_assoc(($data1)))
 {
   $myarray['Turf_id']=$row['Turf_id'];
    $myarray['Turf_name']=$row['Turf_name'];
    $myarray['Owner_email']=$row['Owner_email'];
    $myarray['user_type']='turf';
   array_push($list,$myarray);
   
  } 
 }
 else
 {
   $myarray['message']="failed";
   array_push($list,$myarray);
 }

}
 echo json_encode($list);
