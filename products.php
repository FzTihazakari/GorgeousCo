<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="css/footer.css">

    <style>
.dropbtn {
  background-color: #ad77a4;
  color: white;
  padding: 20px;
  font-size: 20px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align:center; 
}

.dropdown-content a {
  color: black;
  padding: 15px 20px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ad77a4;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #dc62c7;}

.background-image-container {
position:relative;
}

.dropdown-container {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
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

<div class="background-image-container">
  <img data-interchange="[images/productpage.png, (retina)], [images/productpage.png, (large)], [images/banner-1.png, (mobile)], [images/productpage.png, (medium)]">
  <noscript><img src="images/productpage.png"></noscript>
  <noscript><h4>Explore the best products for your routine. High End or Local - You decide.</h4></noscript>
  <div class="dropdown-container">
    <div class="dropdown">
      <button class="dropbtn">Start Shopping</button>
      <div class="dropdown-content">
        <a href="highendproducts.php">High End Products</a>
        <a href="localproducts.php">Local Products</a>
      </div>
    </div>
  </div>
</div>



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
