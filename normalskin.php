<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Normal Skin || GORGEOUS Skin Specialist</title>
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
<div style="body">
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
    
    <img data-interchange="[images/normalSkin.png, (retina)], [images/normalSkin.png, (large)], [images/normalSkin.png, (mobile)], [images/normalSkin.png, (medium)]">
    <noscript><img src="images/normalSkin.png"></noscript>

      <main>
        <section class="our-services">
        <main>
        <section class="popular-places">
            <div class="container">
            <br><br>
<p class="tajuk">A GUIDE TO NORMAL SKIN</p>
<p class="stylesss">Normal skin is a healthy and well-balanced skin type characterized by <br>an optimal level of moisture and natural oils. <br>
It is often considered the ideal skin type, <br>as it is neither too dry nor too oily.</p>
<br><br>
<div class="pstyle">
<div style="background-color: #FCD5CE; padding: 10px;">
  <p class="pstyle" style="font-weight: bold;">Skin Condition</p>
  <p class="stylesss">Characteristics: Well-balanced moisture levels, smooth and supple texture, even complexion.</p>
  <p class="stylesss">Concerns: Maintaining skin health, preventing imbalances, preserving natural radiance.</p>
</div>
<br><br>
<p class="pstyle" style="font-weight: bold;">Suitable Ingredients</p>
<p class="stylesss">Hyaluronic Acid: <br>Hyaluronic acid is a powerful humectant that attracts and retains moisture in the skin, keeping it hydrated and plump.</p>
<p class="stylesss">Vitamin E: <br>Vitamin E is an antioxidant that helps protect the skin from free radicals and environmental damage. 
    <br>It also has moisturizing properties and supports overall skin health.</p>
<p class="stylesss">
Niacinamide:<br> Niacinamide, also known as Vitamin B3, helps regulate sebum production, improves skin elasticity, and enhances the skin's barrier function. 
<br>It can also help even out skin tone and reduce the appearance of fine lines.</p>
<p class="stylesss">
Green Tea Extract: <br>Green tea extract is rich in antioxidants that help protect the skin from damage caused by environmental factors. 
<br>It also has soothing properties and can help reduce inflammation.</p>
<p class="stylesss">
Aloe Vera: <br>Aloe vera has moisturizing and soothing properties, making it beneficial for maintaining the balance of normal skin. 
<br>It can also help calm any irritation or redness.</p>
<p class="stylesss">
Peptides: <br>Peptides are amino acid chains that support collagen production and improve skin elasticity. 
<br>They can help maintain the skin's firmness and smoothness.</p>
<p class="stylesss">
Antioxidants: <br>Antioxidants such as Vitamin C, resveratrol, and coenzyme Q10 help protect 
<br>the skin from oxidative stress and promote a healthy complexion.</p>
</div>
        </div>
                        
      </div>
        <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
</head>
<body>


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
