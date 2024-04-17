
<?php
    include 'connection.php';
    include 'session_start.php';

    $loginID = (int)$_SESSION["loggedInID"];
    $orderID = $_POST['orderID'];
    $productID = $_POST['productID'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Form</title>
    <!-- google fonts para di na mag font face  -->
    <link rel="shortcut icon" href="./images/OBHAHA.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- box icons pati check mark -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
   
    <link rel="stylesheet" href="./css/app.css">
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
                        <li><a href="./admin.html"><i class='bx bx-user-circle'></i></a></li>
                        <li><a href="./cart1.html"><i class='bx bx-cart'></i></a></li><span class="cart-count">26</span>
                    </ul>
                </div>
            </div>
            <!-- end ng mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="container1" data-navbar>
                    <ul class="main-menu">
                        <li><a href="./index1.html">home</a></li>
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
                                 
                              
                            </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href="#footer">Help</a></li>
                        <li><a href="#footer">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>
          <!-- end header -->



          <section class="ratingform"> 

            <div class="rating"> 
         
             <div class="content"> 
         
              <h2>Product Review</h2> 
         


              <div class="form"> 
              <form action = "comment.php" method="post">
    
                <input type="hidden" name="orderID" value="<?php echo $orderID ?>">
                <input type="hidden" name="productID" value="<?php echo $productID ?>">   
                <input type="hidden" name="loginID" value="<?php echo $loginID ?>">
                <div class="form-group1">
                    <label>Description</label>
                    <textarea id="text1" name="comment" rows="4" class="productrating"  required></textarea>
                </div>
         
               <div class="inputBox"> 
         
                <input type="submit" value="Submit"> 
                </form>
         
               </div> 
         
              </div> 
         
             </div> 
            </section>
         
           
         

  
    <!-- footer -->
    <footer class="footer" id="footer">
        <div class="container3">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Contact us</h3>
                    <ul class="menu">
                        <li><a href="#">+1 (062) 109-9222</a></li>
                        <li><a href="#">Obra2024@Gmail.Com</a></li>
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
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./js/cart_script.js"></script>
      
      </body>
      </html>
