<?php  

    include 'connection.php';
    include 'session_start.php';
    
    $loginID = (int)$_SESSION["loggedInID"];
    $sql = "SELECT cart.*, product.* FROM cart
    JOIN product ON cart.Product_ID = product.Product_ID
    WHERE cart.Acc_ID = '$loginID'";
    $total = 0;
    $Shipping = 15;
    $result = mysqli_query($conn, $sql);
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cart</title>
    <!-- google fonts para di na mag font face  -->
    <link rel="shortcut icon" href="./images/OBHAHA.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- box icons pati check mark -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
   
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/cart_style.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>


<body>
    

    <!-- header -->
    <header>
        <!-- mobile menu -->
        <div class="mobile-menu bg-second">
            <a href="#" class="mb-logo">OBRA.</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
          
       
            <!-- mid header -->
            <div class="bg-main" data-header>
                <div class="mid-header container" data-header>
                  <img class="logo" src="./images/OBRAsuree.png">
                    <div class="search">
                        <input type="text" placeholder="Search for products, brands and users">
                        <i class='bx bx-search-alt'></i>
                    </div>
                    <ul class="user-menu">
                        <li><a href="#"><i class='bx bx-bell'></i></a></li>
                        <li><a href="./admin.php"><i class='bx bx-user-circle'></i></a></li>
                        <li><a href="<?php echo './cart1.php?account=' . $_SESSION['loggedInID']; ?>"><i class='bx bx-cart'></i></a></li><span class="cart-count">26</span>
                    </ul>
                </div>
            </div>
            <!-- end ng mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="container1" data-navbar>
                    <ul class="main-menu">
                        <li><a href="./index.php">home</a></li>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="./products2.php">Shop<i class='bx bxs-chevron-down'></i></a>
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Papercraft</a></li>
                                                <li><a href="#">Wood carving</a></li>
                                                <li><a href="#">Crochet</a></li>
                                                <li><a href="#">Pottery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>‎ </h3>
                                            <ul>
                                                <li><a href="#">Jewelry</a></li>
                                                <li><a href="#">Weaving</a></li>
                                                <li><a href="#">Woodcraft</a></li>
                                                <li><a href="#">Leather</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>‎ </h3>
                                            <ul>
                                                <li><a href="#">Painting</a></li>
                                                <li><a href="#">Candles</a></li>
                                                <li><a href="#">Shirt Printing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                 
                              
                            </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href="#footer">Help</a></li>
                        <li><a href="#footer">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end ng main header -->
    </header>
    <section class="banner"></section>
    <script type="text/javascript">
        windows.addEventListener("scroll", function() {
            var header = document.querySelector("");
            header.navList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <!-- end header -->


    <h1 class="shoppingcart">SHOPPING CART</h1>
    
    <div class="shopping-cart">

     
    <?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="product1">
            <div class="group-checkbox1">
                <input type="checkbox" id="statusA">
                <label for="statusA">
                    <i class='bx bx-check'></i>
                    <div class="product-image">
                        <img src="<?php echo $row['product_image'] ?>">
                    </div>
                </label>
            </div>

            <div class="product-details">
                <div class="product-title"><?php echo $row["Product_Name"] ?></div>
            </div>           
            <div class="product-price"><?php echo "₱ " . $row["Price"] ?></div>


            <form action="remove_product.php" method="post">
                <input type="hidden" name="cartID" value="<?php echo $row["cart_id"] ?>">
                <div class="product-removal">
                    <button type="submit" class="remove-product">
                        Remove
                    </button>
                </div>
            </form>
        </div>
<?php
        $total += $row['Price'];
    }
}

?>




        <?php  $Shipping = $Shipping + $total;  ?>



      
      
        <div class="totals">
          <div class="totals-item">
            <div class="totals-value" id="cart-subtotal">Sub Total: <?php  echo "₱ " . $total ?></div>
            <br>
            <div class="totals-value" id="cart-shipping">Shipping: ₱15.00</div>
              <br>
            <div class="totals-value" id="cart-total"><strong>Grand Total:  <?php  echo "₱ " . $Shipping ?></strong></div>
          </div>
        </div>
   </div>    
             <!-- <a href="./checkout_form.html">
            <button class="checkout">Place Order</button>
          </a> -->
          <form action="checkout_form.php" method="post">
        <input class="checkout" type="submit" name="submit" value="Checkout">
    </form>

      
     

    <!-- footer -->
    <footer class="footer1" id="footer">
        <div class="container3">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Contact us</h3>
                    <ul class="menu">
                        <li><a href="#">+1 (062) 109-9222</a></li>
                        <li><a href="#">Obra2024@Gmail.Com</a></li>
                        <li><a href="#">product help</a></li>                       
                        <li><a href="#">Southcom Village, Upper Calarian, Z.C.</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">About us</h3>
                    <ul class="menu">
                      <li><a href="./aboutobra.html">About obra</a></li>
                      <li><a href="./obrapolicies.html">obra policies</a></li>
                 
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">support</h3>
                    <ul class="menu">
                        <li><a href="https://parcelsapp.com/en/carriers/philippines-post" target="_blank">order tracking</a></li>
                        <li><a href="./accountsettings.html" > Account Settings </a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            OBRA.
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

      <!-- partial -->
      
      
      </body>
      </html>
















