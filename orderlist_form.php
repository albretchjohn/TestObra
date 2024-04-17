<?php  

    include 'connection.php';
    include 'session_start.php';

    $loginID = (int)$_SESSION["loggedInID"];

    $sql = " SELECT
        Orders.OrderID,
        Seller.Username AS SellerUsername,
        Buyer.Username AS BuyerUsername,
        product.*,
        Orders.Product_ID,
        Orders.Quantity,
        Orders.Payment
    FROM
        Orders
    JOIN
        account AS Seller ON orders.SellerID = Seller.Acc_ID
    JOIN
        account AS Buyer ON orders.BuyerID = Buyer.Acc_ID
    JOIN
        product ON orders.Product_ID = product.Product_ID
    WHERE
        orders.BuyerID = '$loginID' OR  orders.SellerID = '$loginID' ";

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Orders</title>
    <link rel="shortcut icon" href="./images/OBHAHA.png" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- box icons pati check mark -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/app.css" />
    <link rel="stylesheet" href="./css/grid.css"/>
    <link rel="stylesheet" href="./css/reset.css"/>
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
              <form action="products_search.php" method="GET">
                    <div class="search">
                        <input type="search" name="searched" placeholder="Search for products, brands and users">
                        <i class='bx bx-search-alt'></i>
                    </div>
                    </form>
                <ul class="user-menu">
                    <li><a href="#"><i class='bx bx-bell'></i></a></li>
                    <li><a href="./admin.php"><i class='bx bx-user-circle'></i></a></li>
                    <?php echo '<li><a href="./cart1.php?account=' . $_SESSION['loggedInID'] . '"><i class="bx bx-cart"></i></a></li><span class="cart-count">78</span>'; ?>
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




    <div class="admin_container">
      
      <!-- ========== Sidebar ========== -->

      

      <aside>
        <div class="top">
          
          <div class="close" id="close-btn">
            <span class="material-icons-sharp"> close </span>
          </div>
        </div>
        <div class="sidebar">
          <a href="./admin.php">
            <span class="material-icons-sharp"> grid_view </span>
            <h3>Dashboard</h3>
          </a>
          <a href="./userprofile1.php">
            <span class="material-icons-sharp"> person_outline </span>
            <h3>Shop Profile</h3>
          </a>

          <a href="./orderlist_form.html" >
            <span class="material-icons-sharp"> receipt_long </span>
            <h3>Orders</h3>
            <span class="order-count">102</span>
          </a>

          <a href="./favorites_form.html">
            <span class="bx bxs-heart">  </span>
            <h3>Favorites</h3>
            <span class="fave-count">269</span>
          </a>
       
          <a href="./chatsystem_form.html">
            <span class="material-icons-sharp"> mail_outline </span>
            <h3>Messages</h3>
            <span class="message-count">26</span>
          </a>

          <a href="./products_stock.php">
            <span class="material-icons-sharp"> inventory </span>
            <h3>Products</h3>
          </a>
         
          <a href="./accountsettings.html">
            <span class="material-icons-sharp"> settings </span>
            <h3>Account Settings</h3>
          </a>
        
        

          <a href="#">
            <span class="material-icons-sharp"> logout </span>
            <h3>Logout</h3>
          </a>



        </div>
      </aside>

      

      <!-- ========== Main section ========== -->
<main>
    <div class="my-orders">
        <h2>My Orders</h2>
        <table>
            <thead>
                <tr class="mainth">
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Quantity</th>
                    <th>Buyer</th>
                    <th>Seller</th>
                    <th>Total Payment to Seller</th>
                    <th>‎</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { 
                ?>
                        <tr>
                            <td scope="row"><?php echo $row["Product_Name"] ?></td>
                            <td scope="row"><?php echo $row["Price"] ?></td>
                            <td scope="row"><?php echo $row["Quantity"] ?></td>
                            <td scope="row"><?php echo $row['BuyerUsername'] ?></td>
                            <td scope="row"><?php echo $row['SellerUsername'] ?></td>
                            <td scope="row"><?php echo "₱ " . $row["Payment"] ?></td>
                            <td scope="row">
                                <a href="https://parcelsapp.com/en/carriers/philippines-post" target="_blank">
                                    <button class="track">Track</button>
                                </a>
                            </td>
                            <td scope="row">
                                <?php if ($row['Acc_ID'] == $loginID ) { ?>
                                    <a>
                                        <button class="seller">You are the Seller!</button>
                                    </a>
                                <?php } else { ?>
                                    <form action = "rating_form.php" method="post">
                                        <input type="hidden" name="productID" value="<?php echo $row['Product_ID'] ?>">                                   
                                        <input type="hidden" name="orderID" value="<?php echo $row['OrderID'] ?>">
                                        <button type="submit" class="cancel">Received and Comment</button>
                                    </a>
                                <?php } ?>
                            </td>
                        </tr>
                <?php 
                    }
                } 
                ?>
            </tbody>
        </table>
        <a href="#">Show All</a>
    </div>
</main>


      <!-- ========== Right section ========== -->
      <div class="right">
        <!-- ---------- Top ---------- -->
        <div class="top">
          <button id="menu-btn">
            <span class="material-icons-sharp"> menu </span>
          </button>
        
         
        </div>

        <!-- ---------- Recent updates ---------- -->
        </div>
   <!-- footer -->
   <footer class="footer" id="footer">
    <div class="container4">
        <div class="row">
            <div class="col-3 col-md-6">
                <h3 class="footer-head"><strong>Contact us</strong></h3>
                <ul class="menu">
                    <li><a href="#">+1 (062) 109-9222</a></li>
                    <li><a href="#">Obra2024@Gmail.Com</a></li>
                    <li><a href="#">Southcom Village, Upper Calarian, Z.C.</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head"><strong>About us</strong></h3>
                <ul class="menu">
                  <li><a href="./aboutobra.html">About obra</a></li>
                  <li><a href="./obrapolicies.html">obra policies</a></li>
                
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head"><strong>support</strong></h3>
                <ul class="menu">
                    <li><a href="https://parcelsapp.com/en/carriers/philippines-post" target="_blank">order tracking</a></li>
                    <li><a href="./accountsettings.html" > Account Settings </a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6 col-sm-12">
                <div class="contact">
                    <h3 class="contact-header4">
                        OBRA.
                    </h3>
                    <ul class="contact-socials4">
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
</footer>

<!-- end footer -->
    


    <!--script src="./js/orders1.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/admin1.js"></script-->
  </body>
</html>
