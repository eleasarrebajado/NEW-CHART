<?php require "dbConnection.php";
session_start();
?>

  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="js/loader.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>


<!-- ======================================================================== -->


  
</head>
<body>
    




<main>
  <div class="box-top"></div>
  <!-- this is the side nav start ----------------------- -->
      <div class="btnOpen"></div>
      <div class="side-nav">
        <div class="logo-container">
          <img src="images/chbc-logo.png" alt="Chbc Logo" srcset="">
        </div>

        <div class="dashBox">
          <span>
            <img src="images/meter.png" alt="">
          </span>
            Dashboard
        </div>
<!-- ---------------------------------------------------------- -->

<?php 
        
        @include 'branches/sideNav/sideNavInclude.php' 
      
      ?>


<!-- this is the side nav end ----------------------- -->
        


        <div class="btn-hide">
          <div class="btn-box">
            <div class="hide-btn"></div>
          </div>
        </div>
      </div>
      <script src="js/index.js"></script>
  <!-- this is the side nav end ----------------------- -->
  <div class="main-container">
    <h1>CONSOLACION DASHBOARD</h1>
    <hr>
    
    <div class="wrapper">
      <!-- THIS IS THE BAR DIVISION START===========================  -->
      <div class="main_bar_container">
        <div class="box">
          <iframe src="branches/consolacion/dailySales.php" frameborder="0"></iframe>
        </div>
        <div class="box">
          <iframe src="branches/consolacion/line.php" frameborder="0"></iframe>
          <iframe src="" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- =========================================================== -->
<!-- this is the footer division -->
<!-- =========================================================== -->

<footer>© 2023 Copyright MIS Deparment</footer>

</body>
</html>