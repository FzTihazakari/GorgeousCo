<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders || GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="css/footer.css">
    
    <style>
      body{
        background-color:#F2DBDB;
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
          <li class="active"><a href="orders.php">My Orders</a></li>
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

    <div class="row" style="margin-top: 10px; ">
  <div class="large-12">
    <h3 style="text-align:center; font-family:'times-new-roman'; font-weight:bolder;">MY ORDERS</h3>
    <hr style="border-top: 1px solid #000; margin-top: 10px; margin-bottom: 10px;">

    <?php
    $user = $_SESSION["username"];
    $result = $mysqli->query("SELECT * from orders where email='".$user."'");
    if($result) {
      while($obj = $result->fetch_object()) {
        echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
        echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
        echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
        echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
        echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
        echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
        echo '<p><strong>Total Cost</strong>: MYR '.$obj->total.'</p>';
        echo '<p><hr style="border-top: 1px solid #000; margin-top: 10px; margin-bottom: 10px;"></p>';
      }
    }
    ?>
  </div>
</div>

<div class="row" style="margin-top: 10px;">
  <div class="small-12">
    <!-- Rest of the code -->
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
