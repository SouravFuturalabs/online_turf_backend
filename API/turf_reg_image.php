<?php
include 'connection.php';

$Turf_id=$_POST["Turf_id"];

$photo=$_FILES['image']['name'];

if($photo != "")
{
    $filearray=pathinfo($_FILES['image']['name']);
    $file=rand();
   $file_ext=$filearray["extension"];

    $filenew=$file .".".$file_ext;


    move_uploaded_file($_FILES['image']['tmp_name'],"../img/".$filenew);

}
$data=mysqli_query($con,"UPDATE `turf_tbl` SET `licence`='$filenew' WHERE Turf_id='$Turf_id'");
if($data)
 {

  

  $myarray['message']='sucess';
   
  
}
 else
 {
  
 
  $myarray['message']='failed';
   
   
}

  echo json_encode($myarray);

?>