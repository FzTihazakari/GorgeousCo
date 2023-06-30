<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oily Skin || GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skintypepage.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">


    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <style>
        body{
        background-color:#F2DBDB;
        padding-bottom: 100px;
        }
        </style>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">GORGEOUS Skin Specialist</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="skinType.php">Skin Type</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
    
    <img data-interchange="[images/oilySkin.png, (retina)], [images/oilySkin.png, (large)], [images/oilySkin.png, (mobile)], [images/oilySkin.png, (medium)]">
    <noscript><img src="images/oilySkin.png"></noscript>

    <main>
  <section class="our-services">
    <main>
      <section class="popular-places">
        <div class="container">
          <br><br>
          <p class="tajuk">A GUIDE TO OILY SKIN</p>
          <p class="stylesss">Oily skin is characterized by an excess production of sebum, <br>resulting in a shiny appearance and enlarged pores.<br>
           It is prone to acne breakouts and blemishes.</p>
          <br><br>
          <div class="pstyle">
            <div style="background-color: #FCD5CE; padding: 10px;">
              <p class="pstyle" style="font-weight: bold;">Skin Condition</p>
              <p class="stylesss">Characteristic: Excess sebum production, shiny appearance, enlarged pores, prone to acne and blemishes.</p>
              <p class="stylesss">Concerns: Managing oiliness, preventing breakouts, balancing sebum production.</p>
            </div>
            <br><br>
            <p class="pstyle" style="font-weight: bold;">Suitable Ingredients</p>
      <p class="stylesss">Salicylic Acid: <br>Helps exfoliate and unclog pores, reducing excess oil.</p>
      <p class="stylesss">Witch Hazel: <br>Acts as an astringent to control oil production.</p>
      <p class="stylesss">Tea Tree Oil: <br>Known for its antibacterial properties, it helps manage acne.</p>
      <p class="stylesss">Niacinamide: <br>Regulates sebum production and minimizes pore appearance.</p>

          </div>
        </div>
      </section>
    </main>
    <section class="our-services">
      <main>

        <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
</head>
<body>
  <!--
<footer>
<div class="footer">
<div class="row">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
</ul>
</div>

        -->

        <div class="footer-basic">
        <footer>

        <img class="footerimage" src="images/logo-gorgeous.png"></img>
         
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="products.php">Products</a></li>
                <li class="list-inline-item"><a href="contact.php">Contact</a></li>
            </ul>
            <p class="copyright">GORGEOUS Skin Specialist © 2023</p>
        </footer>
    </div>

      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
