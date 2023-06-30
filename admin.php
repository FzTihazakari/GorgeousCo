<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/productstyling.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="css/footer.css">

    <style>
    body {background-color: #EBBCBC;}
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


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <br><br>
        <h3 style="text-align: center; font-family: 'times-new-roman'; font-weight: bolder;">
  <span style="background-color: #f5f5f5; padding-left: 10px;">HEY ADMIN!</span>
</h3>

      <br><br>
      
      <?php
  $result = $mysqli->query("SELECT * from products order by id asc");
  if ($result) {
    $count = 0;
    while ($obj = $result->fetch_object()) {
      if ($count % 4 == 0) {
        echo '</div><div class="row" style="margin-top: 10px;">';
      }

      echo '<div class="large-3 columns product-card">';
      echo '<p><h5 class="forh5">' . $obj->product_name . '</h5></p>';
      echo '<br>';
      echo '<div class="kemaskan">';
      echo '<img src="images/products/' . $obj->product_img_name . '"/>';
      echo '<br>';
      echo '<p><strong>Product Code</strong>: ' . $obj->product_code . '</p>';
      echo '<p><strong>Description</strong>: </p>';
      echo '<div class="description">' . nl2br($obj->product_desc) . '</div>';
      echo '<br>';
      echo '<p><strong>Units Available</strong>: ' . $obj->qty . '</p>';
      echo '<br>';
      echo '<div class="large-6 columns" style="padding-left:0;">';
      echo '<form method="post" name="update-quantity" action="admin-update.php">';
      echo '<p><strong>New Qty</strong>:</p>';
      echo '</div>';
      echo '<div class="large-6 columns">';
      echo '<input type="number" name="quantity[]"/>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      $count++;
    }
  }
  $result = $mysqli->query("SELECT * from productsl order by id asc");
  if ($result) {
    $count = 0;
    while ($obj = $result->fetch_object()) {
      if ($count % 4 == 0) {
        echo '</div><div class="row" style="margin-top: 10px;">';
      }

      echo '<div class="large-3 columns product-card">';
      echo '<p><h5 class="forh5">' . $obj->product_name . '</h5></p>';
      echo '<br>';
      echo '<div class="kemaskan">';
      echo '<img src="images/products/' . $obj->product_img_name . '"/>';
      echo '<br>';
      echo '<p><strong>Product Code</strong>: ' . $obj->product_code . '</p>';
      echo '<p><strong>Description</strong>: </p>';
      echo '<div class="description">' . nl2br($obj->product_desc) . '</div>';
      echo '<br>';
      echo '<p><strong>Units Available</strong>: ' . $obj->qty . '</p>';
      echo '<br>';
      echo '<div class="large-6 columns" style="padding-left:0;">';
      echo '<form method="post" name="update-quantity" action="admin-update.php">';
      echo '<p><strong>New Qty</strong>:</p>';
      echo '</div>';
      echo '<div class="large-6 columns">';
      echo '<input type="number" name="quantity[]"/>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      $count++;
    }
  }




  ?>
</div>
    </div>


    <div class="row" style="margin-top: 10px;">
  <div class="small-12 text-center"><br>
    <p><input style="clear:both; text-align: center;" type="submit" class="button" value="Update"></p>
    </form>
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


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
