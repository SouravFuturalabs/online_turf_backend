
<?php
include 'connection.php';
session_start();
$id=$_GET["id"];
    $data=mysqli_query($con,"SELECT * FROM `turf_tbl` where turf_id='$id'");
 $row=mysqli_fetch_assoc($data);  

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,tr
        {
          background-color: crimson; 
          color:white;
            border:2px solid white;
        }
    </style>
  <title>Soccer &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


  <?php
  include 'sidebar.php';
  ?>

  
    
    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white"></h1>
            
          <div class="widget-next-match" style="margin-top: 200px; margin-bottom: 20px;">
          <form  method="POST">
                     <div class="bg-primary text-center p-5">
                       
                    <table class="table table-bordered"><h1 class="mb-4">Turf</h1>
                    
                        <tr>
                        
                          <td>Turf:</td> <td><label for="lid" name="lid" ><?php echo $row['Turf_id'];?></label></td> <td rowspan="9">photo:<img src="./img/<?php echo $row['image'];?>" height="200" width="200" alt=""><br><br> Licence:<img src="./img/<?php echo $row['licence'];?>" height="200" width="200" alt=""></td></tr>
                       <tr> <td>  <label for="">Name:</td> <td><?php echo $row['Turf_name'];?></label></td> </tr></tr>
                       <tr> <td>  <label for="">Location:</td> <td><?php echo $row['Turf_location'];?></label></td> </tr></tr>  
    <tr><td> <label for="">Owner:</td><td> <?php echo $row['owner_name'];?></label></tr>
    <tr><td><label for="">Email:</td><td><?php echo $row['Owner_email'];?></label></td></tr>
    <tr><td><label for="">Phone:</td><td><?php echo $row['owner_ph'];?></label></td></tr>
    <tr> <td><label for="">Account:</td><td><?php echo $row['owner_acc'];?></label></td></tr>
    <!-- <tr> <td><label for="">Licence:</td><td><?php echo $row['licence'];?></label></td></tr>  -->
    <tr><td> <label for="">Rate:</td><td> <?php echo $row['rate'];?></label></td></tr>
   
            <!-- <tr><td></td><td> <input name="submit" type="submit" value="submit" />  </tr>       -->
            <!-- <tr><td colspan="2"><button name="submit"  class="btn btn-info btn-lg">Issue</button> </td></tr>      -->
                    </table>
         
                    </form>
            </div>
            <!-- <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p> -->
          </div>
        </div>
      </div>
      
    </div>
<!-- 
    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
           


          </div>
        </div>
      </div>

  </div> -->
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>