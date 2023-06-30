<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skin Type || GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="css/footer.css">

    <style>
.table1 {
  border-collapse: collapse;
}

.table1 td {
  padding: 10px;
  text-align: center;
  background-color: #FCD5CE; /* Pastel pink color */
}

.table1 a {
  color: black; /* White color for the button text */
  text-decoration: none;
}

.table1 a:hover {
  text-decoration: underline;
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
        // Connect to the database (ni dropdown tk jadi, i commentkan dulu)
        //$db = new PDO('mysql:host=localhost;dbname=bolt', 'root', '');

        // Get all the product categories from the database
       // $sql = 'SELECT * FROM products';
        // $results = $db->query($sql);

        // Create a dropdown menu of product categories
       // echo '<li><select name="products">';
       // echo '<option value="">Select Product Category</option>';
       // foreach ($results as $row) {
          //echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
       // }
      //  echo '</select></li>'; 
  
    
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
    
    <img data-interchange="[images/registration.png, (retina)], [images/registration.png, (large)], [images/banner-1.png, (mobile)], [images/registration.png, (medium)]">
    <noscript><img src="images/registration.png"></noscript>

      <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>Know Your Skin Type</h4>
                            <p>All skin types can benefit from daily cleansing and moisturizing, but different skin types—which
                                include oily, dry, normal, combination, and sensitive skin—have different needs. 
                                That’s why understanding your skin type is the first step in properly caring for it. 
                                But how do you know what type of skin you have? The answer can be found through simple observation.<br>
                                <br>Your skin type is based on the amount of sebum (oil) your skin produces.
                                 Skin’s oiliness can change over time and may also be influenced by factors such
                                  as stress, genetics, hormones, humidity, and the natural aging process.<br>
                                  <br>Once you know what to look for—using the common characteristics listed 
                                  below—pinpointing your skin type can usually be determined through simple observation.
                              </p>

                              <div class="blue-button">
                   
                <table class='table1'>
                <tr>
                <td>
                <a href="drySkin.php">Dry Skin</a>
                </td>
                <td>
                <a href="oilySkin.php">Oily Skin</a>
                </td> 
                <td>
                <a href="combinationSkin.php">Combination Skin</a> 
                </td> 
                <td>
                <a href="sensitiveSkin.php">Sensitive Skin</a>
                </td>
                <td>
                <a href="normalSkin.php">Normal Skin</a> 
                </td>
                </tr>
                </table>

      </div>
      <div class="footer-basic">
        <footer>

        <img style="margin-right:50%; margin-left:40%" class="footerimage" src="images/logo-gorgeous.png"></img>
         
            <ul class="list-inline">
                <li style="text-align=center" class="list-inline-item"><a href="index.php">Home</a></li>
                <li style="text-align=center" class="list-inline-item"><a href="products.php">Products</a></li>
                <li style="text-align=center" class="list-inline-item"><a href="contact.php">Contact</a></li>
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
