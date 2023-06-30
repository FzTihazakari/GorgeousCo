<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Combination Skin || GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skintypepage.css">
    <link rel="stylesheet" href="css/footer.css">

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
    
    <img data-interchange="[images/combinationSkin.png, (retina)], [images/combinationSkin.png, (large)], [images/combinationSkin.png, (mobile)], [images/combinationSkin.png, (medium)]">
    <noscript><img src="images/combinationSkin.png"></noscript>

    <main>
  <section class="our-services">
    <main>
      <section class="popular-places">
        <div class="container">
          <br><br>
          <p class="tajuk">A GUIDE TO COMBINATION SKIN</p>
          <p class="stylesss">Combination skin is characterized by having both oily and dry areas on the face. <br>
          The T-zone, which includes the forehead, nose, and chin, tends to be oily, <br>
          while the cheeks and other areas may be normal or dry. <br>
          Combination skin can be a bit tricky to manage, as it requires balancing the needs of different areas. </p><br>
          <div class="pstyle">
            <div style="background-color: #FCD5CE; padding: 10px;">
            <p class="pstyle" style="font-weight: bold;">Skin Condition</p>
<p class="stylesss">Characteristics: Combination skin is characterized by having both oily and dry areas on the face. <br>The T-zone (forehead, nose, and chin) tends to be oily, while the cheeks and other areas may be normal or dry.</p>
<p class="stylesss">Concerns: Balancing oiliness in the T-zone, hydrating dry areas, minimizing enlarged pores, preventing breakouts.</p>

            </div>
            <br><br>
            <p class="pstyle" style="font-weight: bold;">Suitable Ingredients</p>
<p class="stylesss">Salicylic Acid: <br> Helps exfoliate and unclog pores in the oily areas, reducing the risk of breakouts.</p>
<p class="stylesss">Hyaluronic Acid: <br>Provides lightweight hydration to the dry areas, keeping them moisturized without greasiness.</p>
<p class="stylesss">Niacinamide: <br>Regulates sebum production in the T-zone, helping to balance oiliness and minimize enlarged pores.</p>
<p class="stylesss">Glycolic Acid: <br>Exfoliates and smooths the skin's surface, improving texture and reducing the appearance of fine lines and wrinkles.</p>
<p class="stylesss">Jojoba Oil: <br>Mimics the skin's natural oils and can help regulate oil production in the T-zone while providing moisture to dry areas.</p>
<p class="stylesss">Green Tea Extract:<br> Rich in antioxidants, it helps protect the skin from environmental damage and soothes any irritation.</p>

          </div>
        </div>
      </section>
    </main>
    <section class="our-services">
      <main>
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
