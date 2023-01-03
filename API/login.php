
<?php
include 'connection.php';



$uname=$_POST["uname"];

$pwd=$_POST["password"];

 $data=mysqli_query($con,"SELECT Cid,Cname,CEmail,type from custreg_tbl INNER join login_tbl on custreg_tbl.Cid=login_tbl.Login_id WHERE login_tbl.uname='$uname' and login_tbl.password='$pwd'");
 $row=mysqli_fetch_assoc(($data));
 if(mysqli_num_rows($data)>0)
 {
//   $data1=mysqli_query($con,"SELECT Cid,Cname,CEmail,type from custreg_tbl INNER join login_tbl on custreg_tbl.Cid=login_tbl.Login_id WHERE CEmail='dhoni@gmail.com'");
//   $row1=mysqli_fetch_assoc($data1);
  $list=array();
  $myarray['Cid']=$row['Cid'];
  $myarray['Cname']=$row['Cname'];
  $myarray['CEmail']=$row['CEmail'];
  $myarray['type']=$row['type'];
  $myarray['message']='sucess';
   
  
}
 else
 {
   $data1=mysqli_query($con,"SELECT Turf_id,Turf_name,Owner_email,type from turf_tbl INNER join login_tbl on turf_tbl.Turf_id=login_tbl.Login_id WHERE login_tbl.uname='$uname' and login_tbl.password='$pwd'");
   $row1=mysqli_fetch_assoc(($data1));
   if(mysqli_num_rows($data1)>0)
 {
//   $data1=mysqli_query($con,"SELECT Cid,Cname,CEmail,type from custreg_tbl INNER join login_tbl on custreg_tbl.Cid=login_tbl.Login_id WHERE CEmail='dhoni@gmail.com'");
//   $row1=mysqli_fetch_assoc($data1);
  $list=array();
  $myarray['Turf_id']=$row1['Turf_id'];
  $myarray['Turf_name']=$row1['Turf_name'];
  $myarray['Owner_email']=$row1['Owner_email'];
  $myarray['type']=$row1['type'];
  $myarray['message']='sucess';
   
   
}
else
{
   $myarray['message']='failed';
}
 }
  echo json_encode($myarray);
