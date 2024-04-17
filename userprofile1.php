<?php  

    include 'connection.php';
    include 'session_start.php';

    $ID = $_SESSION["loggedInID"];
    
    $sql = "SELECT account.*, COUNT(product.Product_ID) AS TOTAL
            FROM account
            JOIN product ON account.Acc_ID = product.Acc_ID
            WHERE account.Acc_ID = '$ID'";



    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profiles</title>
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
            <div class="bg-main">
                <div class="mid-header container">
                    <img class="logo" src="./images/OBRAsuree.png">
                    <form action="products_search.php" method="GET">
                    <div class="search">
                        <input type="search" name="searched" placeholder="Search for products, brands and users">
                        <i class='bx bx-search-alt'></i>
                    </div>
                    </form>
                    <ul class="user-menu">
                        <li><a href="#"><i class='bx bx-bell'></i></a></li>
                        <?php //Login or Register
                                if (!isset($_SESSION['username'])) {
                                    ?>
                                    <li><a href="./login_form.php"><i class='bx bx-user-circle'></i></a></li>
                               <?php } else {?>
                                    <li><a href="./admin.php"><i class='bx bx-user-circle'></i></a></li>
                                <?php } ?>
                                
                         <?php       if (!isset($_SESSION['username'])) {                 
                                    echo '<li><a href="./login_form.php"><i class=\'bx bx-cart\'></i></a></li>';
                                } else{
                                  
                                   echo '<li><a href="./cart1.php?account=' . $_SESSION['loggedInID'] . '"><i class="bx bx-cart"></i></a></li><span class="cart-count">78</span>';
                                } ?>
                    </ul>
                </div>
            </div>
            <!-- end ng mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="container1">
                    <ul class="main-menu">
                        <li><a href="./index.php">home</a></li>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="./products2.html">Shop<i class='bx bxs-chevron-down'></i></a>
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
                                 
                         
                        <!-- end ng mega menu -->
                        <li><a href="#footer">help</a></li>
                        <li><a href="#footer">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


     <!-- ========== Sidebar ========== -->

      

     <aside class="faveaside">
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

          <a href="./orderlist_form.php" >
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


      
      <main class="cd__main">
      <?php if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_assoc($result)){ ?>  
        <div class="profile-page">
 <div class="content">
   <div class="content__cover">
     <div >
        <img class="content__avatar" src="<?php echo $row['profile_picture'] ?>" alt="">
     </div>
     <div class="content__bull"><span></span><span></span><span></span><span></span><span></span>
     </div>
   </div>
   <div class="content__actions"><a href="./editprofile_form.php">
    
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
         <path fill="currentColor" d="M192 256A112 112 0 1 0 80 144a111.94 111.94 0 0 0 112 112zm76.8 32h-8.3a157.53 157.53 0 0 1-68.5 16c-24.6 0-47.6-6-68.5-16h-8.3A115.23 115.23 0 0 0 0 403.2V432a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48v-28.8A115.23 115.23 0 0 0 268.8 288z"></path>
        <path fill="currentColor" d="M480 256a96 96 0 1 0-96-96 96 96 0 0 0 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592a48 48 0 0 0 48-48 111.94 111.94 0 0 0-112-112z"></path>
       </svg><span>Edit Profile</span></a>
       <a href="./chatsystem_form.html">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
         <path fill="currentColor" d="M208 352c-41 0-79.1-9.3-111.3-25-21.8 12.7-52.1 25-88.7 25a7.83 7.83 0 0 1-7.3-4.8 8 8 0 0 1 1.5-8.7c.3-.3 22.4-24.3 35.8-54.5-23.9-26.1-38-57.7-38-92C0 103.6 93.1 32 208 32s208 71.6 208 160-93.1 160-208 160z"></path>
         <path fill="currentColor" d="M576 320c0 34.3-14.1 66-38 92 13.4 30.3 35.5 54.2 35.8 54.5a8 8 0 0 1 1.5 8.7 7.88 7.88 0 0 1-7.3 4.8c-36.6 0-66.9-12.3-88.7-25-32.2 15.8-70.3 25-111.3 25-86.2 0-160.2-40.4-191.7-97.9A299.82 299.82 0 0 0 208 384c132.3 0 240-86.1 240-192a148.61 148.61 0 0 0-1.3-20.1C522.5 195.8 576 253.1 576 320z"></path>
       </svg><span>Chat</span></a></div>

   <div class="content__title">
     <h1 class="h11"><?php echo $row['Username'] ?></h1><span><?php echo $row['Address'] ?></span>
   </div>
   <div class="content__description">
     <p> <?php echo $row['Bio'] ?></p>
   </div>
   <ul class="content__list">
     
     
     <li><span><?php echo $row['TOTAL'] ?></span>Products</li>
     
   </ul>
   <div class="content__button"><a class="button">
       <div class="button__border"></div>
       <div class="button__bg"></div>
       <!-- <div><a href="#"><p class="button__text">Follow</p></a></div> -->
 </div>
                <?php }} ?>
</main>







  
    <!-- products content -->
    
    <!-- products content -->
    <div class="bg-main">
        <div class="container7">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.php">home</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./userprofile1.php">Profile</a>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    <div class="col-3 filter-col" id="filter-col">
                        <div class="box filter-toggle-box">
                            <button class="btn-flat btn-hover" id="filter-close">close</button>
                        </div>



                            
    

                          
                            
                        </div>
                     </div>
                </div>
                    <div class="col-9 col-md-12">
                        <div class="box filter-toggle-box">
                            <button class="btn-flat btn-hover" id="filter-toggle">filter</button>
                        </div>
                        <?php 
                    $itemsPerPage = 6;

                    // Current page
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($current_page - 1) * $itemsPerPage;

                    // Fetch total number of rows from your database
                    $sqlTotalRows = "SELECT COUNT(*) AS total FROM product";
                    $resultTotalRows = $conn->query($sqlTotalRows);
                    $rowTotalRows = $resultTotalRows->fetch_assoc();
                    $totalRows = $rowTotalRows['total'];

                    // Calculate total number of pages
                    $totalPages = ceil($totalRows / $itemsPerPage);

                    // SQL query to fetch data for the current page
                    $sqlData = "SELECT * FROM product WHERE Acc_ID = '$ID' LIMIT $start, $itemsPerPage";
                    $resultData = $conn->query($sqlData);



                    // Display fetched data
                   echo '<div class="box">';
                    echo  '<div class="row" id="products">';
                    echo    '<div class="product-list1">';
                    if ($resultData->num_rows > 0) {
                        while ($row = $resultData->fetch_assoc()) { // Display your data Below ?>
                            
                            <li>
                                        <div class="product-card12">
                                            <div class="product-card12-img">
                                                <img src="<?php echo $row['product_image'] ?>">
                                                <img src="./images/2ndpic.png">
                                                
                                            </div>
                                            <div class="product-card1-info">
                                                <div class="product-btn12">

                                            <form action = "update_stock.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" id="product_ID" name="productID" value = "<?php echo $row['Product_ID'] ?>">
                                                <button class="btn-flat1 btn-hover1 btn-shop-now">Edit</button>
                                           
                                            </form>

                                            <form action = "delete_own_product.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" id="product_ID" name="productID" value = "<?php echo $row['Product_ID'] ?>">
                                                <input type="submit" class="btn-flat1 btn-hover1 btn-shop-now" value="Delete">
                                            
                                            </form>

                                                </div>
                                                <div class="product-card1-name">
                                                <?php   echo $row["Product_Name"] ?>  
                                                </div>
                                                <div class="product-card1-price">
                                                    <span class="curr-price"><?php   echo "₱ " . $row["Price"] ?></span>
                                                </div>
                                            </div>
                                        </div>
                            </li>
                        <?php }} 
                        else {
                        echo "No Data";
                    } ?>
                        </div> 
                        </div>
                        </div>

                   <?php echo '<div class="box">';
                    echo '<ul class="pagination">';

                    // Previous page link
                    if ($current_page > 1) {
                        echo '<li><a href="?page=' . ($current_page - 1) . '"><i class="bx bxs-chevron-left"></i></a></li>';
                    }

                    // Page links
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo '<li><a href="?page=' . $i . '" ' . ($current_page == $i ? 'class="active"' : '') . '>' . $i . '</a></li>';
                    }

                    // Next page link
                    if ($current_page < $totalPages) {
                        echo '<li><a href="?page=' . ($current_page + 1) . '"><i class="bx bxs-chevron-right"></i></a></li>';
                    }

                    echo '</ul>';
                    echo '</div>';
                    

                    // Close connection
                    $conn->close();
?>

                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- end ng products content -->


    <!-- footer -->
    <footer class="footer" id="footer">
        <div class="container3">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Contact Us</h3>
                    <ul class="menu">
                        <li><a href="#">+1 (062) 109-9222</a></li>
                        <li><a href="#">Obra2024@Gmail.com</a></li>
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

    <!-- js links -->
    <!--script src="./js/app.js"></>
    <script src="./js/products3.js"></-->
</body>

</html>