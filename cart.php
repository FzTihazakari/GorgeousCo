<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shopping Cart || GORGEOUS Skin Specialist</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
  <link rel="stylesheet" href="css/footer.css">
  <style>
    body {
      background-image: url("images/cart.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .content-container {
      padding: 10px;
    }

    .footer-basic {
      background-color: #ffffff;
      color: #4b4c4d;
      padding: 10px 0;
      text-align: center;
    }

    .footer-basic ul {
      padding: 0;
      list-style: none;
      text-align: center;
      font-size: 16px;
      line-height: 1.6;
      margin: 0;
    }

    .footer-basic ul li {
      display: inline-block;
      padding: 0 8px;
    }

    .footer-basic .footerimage {
      display: block;
      margin: 0 auto;
      width: 160px;
    }

    .footer-basic p {
      margin: 10px auto 0;
      text-align: center;
      font-size: 12px;
      color: #aaa;
    }
    .sbutton {
  height: 70px;
  width: 300px;
  position: relative;
  background-color: transparent;
  cursor: pointer;
  border: 2px solid #252525;
  overflow: hidden;
  border-radius: 30px;
  color: #333;
  transition: all 0.5s ease-in-out;
}

.sbtn-txt {
  z-index: 1;
  font-weight: 800;
  letter-spacing: 4px;
}

.stype1::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  transition: all 0.5s ease-in-out;
  background-color: #333;
  border-radius: 30px;
  visibility: hidden;
  height: 10px;
  width: 10px;
  z-index: -1;
}

.sbutton:hover {
  color: #fff;
  border: none;
  background-color: #333;
}

.stype1:hover::after {
  visibility: visible;
  transform: scale(100) translateX(2px);
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
        <li class="active"><a href="cart.php">View Cart</a></li>
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

  <div class="content-container">
    <div class="row" style="margin-top: 10px;">
      <div class="large-12">
        <?php
        echo '<p><h3>Your Shopping Cart</h3></p>';

        if (isset($_SESSION['cart'])) {
          echo '<div class="content-container" style="min-height: calc(100vh - 70px);">';

          $total = 0;
          echo '<table>';
          echo '<tr>';
          echo '<th>Code</th>';
          echo '<th>Name</th>';
          echo '<th>Quantity</th>';
          echo '<th>Cost</th>';
          echo '</tr>';
          foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);

            if($result){
              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
          }

          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }
          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';
          echo '</tr>';
          echo '</table>';
        }
        else {
          echo '<div class="content-container" style="min-height: calc(100vh - 70px);">';
          echo "You have no items in your shopping cart.";
          echo "<br><br>";
          echo '<a href="products.php"><button class="sbutton stype1" style="margin-bottom: 20px;">
                    <span class="sbtn-txt">Start Shopping</span>
                  </button></a>';
          echo '</div>';
        }
       
        ?>
      </div>

      <footer class="footer-basic">
        <img class="footerimage" src="images/logo-gorgeous.png">
        <ul>
          <li><a href="index.php">Home</a></li><br>
          <li><a href="products.php">Products</a></li><br>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <p>GORGEOUS Skin Specialist © 2023</p>
      </footer>

      <script src="js/vendor/jquery.js"></script>
      <script src="js/foundation.min.js"></script>
      <script>
        $(document).foundation();
      </script>
    </body>

    </html>

