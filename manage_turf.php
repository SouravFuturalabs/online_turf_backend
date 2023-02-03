
<?php
include 'connection.php';
session_start();

    $data=mysqli_query($con,"SELECT * FROM `turf_tbl` where status='register'");
// $row=mysqli_fetch_assoc($data);  

?>



<!DOCTYPE html>
<html lang="en">

<head>
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


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="images/logonew.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="turf_home.php" class="nav-link" >Home</a></li>
                <li><a href="manage_turf.php" class="nav-link"> Manage Turf</a></li>
                <li><a href="view_notification.php" class="nav-link">Notification</a></li>
                <li><a href="view_feedback.php" class="nav-link">Feedback</a></li>
                <li><a href="view_feedback.php" class="nav-link">Change Password</a></li>
                <li><a href="index.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

  
    
    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white"></h1>
            <!-- <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p> -->
          </div>
        </div>
      </div>
    </div>

    <div class="site-section first-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
           

          <div class="widget-next-match">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th>Turf Name</th>
                    <th>Turf Location</th>
                    <th>Owner Name</th>
                    <th>Photo</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
        while($row=mysqli_fetch_assoc($data))
        {
        ?>
    <tr>
    
    <td><?php echo $row['Turf_name'];?></td>
  
    <td><?php echo $row['Turf_location'];?></td>
    <td><?php echo $row['owner_name'];?></td>
   <td><img src="./img/<?php echo $row['image'];?>" height="50" width="50">
 </td>
 <td><a href="approve_turf.php?id=<?php echo $row['Turf_id']?>">APPROVE</a></td>
    <td><a href="delete_turf.php?id=<?php echo $row['Turf_id']?>">REJECT</a></td>
  

      
   
   
   
     </tr>

       <?php
        }
        ?>
            </div>

          </div>
        </div>
      </div>

  </div>
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