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
    <title>High End Products || GORGEOUS Skin Specialist</title>
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
      <li >
        <a href="products.php">Products</a>
        
      </li>
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

<br><br>

    <img style="width: 150px;" src="images/sk-iilogo.png"  alt="Small Image" class="small-image"><br>
   
    <div class="row" style="margin-top:10px;">
  <div class="small-12">
    <div class="product-container">
      <?php
      $i = 0;
      $product_id = array();
      $product_quantity = array();

      $result = $mysqli->query('SELECT * FROM products');
      if ($result === FALSE) {
        die(mysql_error());
      }

      if ($result) {
        while ($obj = $result->fetch_object()) {
          // Display separator image and containers in the same line
          if ($i % 4 === 0 && $i !== 0) {
            $separatorImages = ['images/la-roche-posay-logo.png', 'images/kiehls-logo.png', 'images/brandintro-logo-lamer-new.png', 'images/diorlogo.png'];
            $separatorIndex = ($i / 4) - 1;
            if (isset($separatorImages[$separatorIndex])) {
              $separatorImage = $separatorImages[$separatorIndex];
              echo '<br>';
              echo '<div class="separator"><img class="small-image" src="' . $separatorImage . '" alt="Separator Image"></div>';
              echo '<br>';
              echo '<br>';
              echo '<div class="row">'; // Open a new row for the containers
            }
          }

 // Display container
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
echo '<p><strong>Price</strong>: MYR ' . $obj->price . '</p>';
echo '<br>';
echo '</div>';

if ($obj->qty > 0) {
  echo '<div class="add-to-cart-container">';
  echo '<a href="update-cart.php?action=add&id=' . $obj->id . '" class="add-to-cart">Add To Cart</a>';
  echo '</div>';
} else {
  echo '<p class="out-of-stock">Out Of Stock!</p>';
}

echo '</div>';



          $i++;

          // Close the row after every 4 containers
          if ($i % 4 === 0) {
            echo '</div>'; // Close the row
          }
        }

        // Close the row if the last set of containers is not complete
        if ($i % 4 !== 0) {
          echo '</div>'; // Close the row
        }

        // Display the separator image after the last set of containers if needed
        if ($i >= 4 && $i % 4 !== 0) {
          $separatorImages = ['images/la-roche-posay-logo.jpg', 'images/kiehls-logo.png', 'images/brandintro-logo-lamer-new.png', 'images/diorlogo.png'];
          $separatorIndex = floor($i / 4);
          if (isset($separatorImages[$separatorIndex])) {
            $separatorImage = $separatorImages[$separatorIndex];
            echo '<div class="separator"><img class="small-image" src="' . $separatorImage . '" alt="Separator Image"></div>';
          }
        }
      }

      $_SESSION['product_id'] = $product_id;
      ?>
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