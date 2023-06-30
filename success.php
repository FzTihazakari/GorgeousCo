<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Success || GORGEOUS Skin Specialist</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="css/footer.css">
    <style>
        body{
          background-image:url("images/success.png");
        background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
        }

        .placing{
          display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin-top: -20vh;
  margin-left: 70vh;
        }

        .notifications-container {
  width: 320px;
  height: auto;
  font-size: 0.875rem;
  line-height: 1.25rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.flex {
  display: flex;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.success {
  padding: 1rem;
  border-radius: 0.375rem;
  background-color: rgb(240 253 244);
}

.succes-svg {
  color: rgb(74 222 128);
  width: 1.25rem;
  height: 1.25rem;
}

.success-prompt-wrap {
  margin-left: 0.75rem;
}

.success-prompt-heading {
  font-weight: bold;
  color: rgb(22 101 52);
}

.success-prompt-prompt {
  margin-top: 0.5rem;
  color: rgb(21 128 61);
}

.success-button-container {
  display: flex;
  margin-top: 0.875rem;
  margin-bottom: -0.375rem;
  margin-left: -0.5rem;
  margin-right: -0.5rem;
}

.success-button-main {
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  background-color: #ECFDF5;
  color: rgb(22 101 52);
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: bold;
  border-radius: 0.375rem;
  border: none
}

.success-button-main:hover {
  background-color: #D1FAE5;
}

.success-button-secondary {
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  margin-left: 0.75rem;
  background-color: #ECFDF5;
  color: #065F46;
  font-size: 0.875rem;
  line-height: 1.25rem;
  border-radius: 0.375rem;
  border: none;
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

<div class="placing">
  <div class="notifications-container">
    <div class="success">
      <div class="flex">
        <div class="flex-shrink-0">
          <svg class="succes-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <div class="success-prompt-wrap">
          <p class="success-prompt-heading">Order completed</p>
          <div class="success-prompt-prompt">
            <p>Yeay! You're on your way to look gorgeous. We have received your order and will be deliver in 2-3 working days.</p>
          </div>
          <div class="success-button-container">
          <a href="orders.php" class="success-button-main">View status</a>
          <a href="index.php" class="success-button-main">Dismiss</a>
          </div>
        </div>
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

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
