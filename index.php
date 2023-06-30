<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/indexpage.css">
        <link rel="stylesheet" href="css/footer.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
   <style>
    .container {
    background-image: url('images/indexsecondpic.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 70%; /* Adjust the desired height */
    width:100%;
    overflow: auto;
    padding: 20px;
      }

      .containers {
    background-image: url('images/beautyblog.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 70%; /* Adjust the desired height */
    width:100%;
    overflow: auto;
    padding: 20px;
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
      <li><a href="skinType.php">Skin Type</a></li>
      <li><a href="products.php">Products</a></li>
      
     <!-- <li class="dropdown">
        <a href="products.php" class="dropbtn">Products</a>
        <ul class="dropdown-content">
          <li><a href="highEndProducts.php">High-End Products</a></li>
          <li><a href="localProducts.php">Local Products</a></li>
        </ul>
      </li> -->
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


    <img data-interchange="[images/banner-1.png, (retina)], [images/banner-1.png, (large)], [images/banner-1.png, (mobile)], [images/banner-1.png, (medium)]">
    <noscript><img src="images/banner-1.png"></noscript>

    <br><br><br><br><br>
    <div class="container">
      <br>
    <p class="new">NEW TO GORGEOUS SKIN SPECIALIST?</p>
    
    <p class="red-text" style="margin-left:70px;">Create an account with us and get RM20 off on your FIRST PURCHASE!</p>
    <br>
    <a href="register.php" style="margin-left: 315px;" class="btn">REGISTER</a>   
    <br><br>       <br>
    <p class="red-text" style="margin-left: 315px;">Already a member?</p>
    <p class="red-text" style="margin-left:245px;">Get your RM20 discount code here!</p>
   <br>
    <div class="scene">
  <div class="cube" style="margin-left: 220px;">
    <span class="side top">CODE : IMGORGEOUS</span>
    <span class="side front">Get Discount Code</span>
  </div>
</div>

  </div>


    <div class="w3-main w3-content w3-padding" style="max-width:1200px; margin: 100px auto;">
  <div style="display: flex; justify-content: center;">
    <div style="text-align: center; margin: 20px 100px;">
      <img src="images/gift.png" alt="" style="width: 50px;">
      <h3 style="margin-bottom: 5px; white-space: nowrap;">SPECIAL GIFT</h3>
      <p>You deserve to be rewarded! <br> Stay Gorgeous!</p>
    </div>
    <div style="text-align: center; margin: 20px 100px;">
      <img src="images/packaging.png" alt="" style="width: 50px;">
      <h3 style="margin-bottom: 5px; white-space: nowrap; ">SAFE PACKAGING</h3>
      <p>Each item is carefully wrapped with care, ensuring that it arrives <br>at your doorstep safely. </p>
    </div>
    <div style="text-align: center; margin: -12px 100px;">
      <img src="images/point.png" alt="" style="width: 100px;">
      <h3 style="margin-bottom: 5px; white-space: nowrap;">GORGEOUS POINTS</h3>
      <p>RM1 = 1 GORGEOUS Point. <br>Collect these points and <br>redeem discount vouchers!</p>
    </div>
  </div>
</div>

<div class="containers">
  <h2 class="new" style="text-align:center; background-color:white;" >BEAUTY BLOG</h2><br>
  <p class="red-text" style="text-align:center; font-size:30px">Must Read Today</p>
  <p class="red-text" style="text-align:center; font-size:30px">The best articles picked from us for you - and your skin.</p>
 <br>
  <div style="display: flex; justify-content: center;">
  <img src="images/blog-skinbarrier.jpg" alt="" style="width:20%; margin-right: 120px;">  
  <img src="images/skincareroutine.jpeg" alt="" style="width:20%; margin-right: 120px;">
  <img src="images/blog-num3.jpg" alt="" style="width:20%;">
</div>
<br>
    <div style="display: flex;">
  <a style="margin-left: 260px; color:black; text-decoration: underline;" href="https://blog.reneerouleau.com/skin-moisture-barrier-not-damaged/">SKIN BARRIER</a>
  <a  style="margin-left: 220px; color:black; text-decoration: underline;" href="https://www.nytimes.com/guides/tmagazine/skincare-routine">HOW TO BUILD A SKINCARE ROUTINE</a>
  <a style="margin-left: 110px; color: black; text-decoration: underline;" href="https://www.colorescience.com/blogs/blog/importance-skin-care">WHAT IS THE IMPORTANCE OF SKINCARE?</a>
</div>
</div>

<br><br><br>
<div style="display: flex; justify-content: center;">
  <img src="images/loc-logo.png" alt="" style="width:6%;  height:6%; margin-right: 250px; margin-top:30px;">  
  <img src="images/mail-logo.png" alt="" style="width:6%;  height:6%;margin-right: 250px; margin-top:50px;">
  <img src="images/ws-logo.png" alt="" style="width:6%; margin-top:30px; height:6%;">
</div>

<br>
    <div style="display: flex;">
  <p style="margin-left: 325px;">Location : Johor, Malaysia</p>
  <p style="margin-left: 130px;">Email : help@gorgeousco.com</p>
  <p style="margin-left: 130px;">Whatsapp : +601128356271</p>
</div>
<br><br>

<!--footer-->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
  <!-- End -->
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>