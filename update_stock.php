<?php
    include 'connection.php';
    include 'session_start.php';
    $user = $_SESSION['username'];
    $ID = $_SESSION["loggedInID"];

    $productID=$_POST['productID'];

   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product</title>
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
                        <li><a href="admin.php"><i class='bx bx-user-circle'></i></a></li>
                        <li><a href="<?php echo './cart1.php?account=' . $_SESSION['loggedInID']; ?>"><i class='bx bx-cart'></i></a></li><span class="cart-count">26</span>
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
          <a href="./userprofile1.html">
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
       
          <a href="#">
            <span class="material-icons-sharp"> mail_outline </span>
            <h3>Messages</h3>
            <span class="message-count">26</span>
          </a>

          <a href="./productsedit_form.html">
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
  

    
      <div class="addproduct">
        <h1 class="h11">Edit Product</h1>
        <form action = "update_item.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="product_ID" name="productID" value = "<?php echo $productID ?>">
        <input type="hidden" id="user_ID" name="userID" value = "<?php echo $ID ?>">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" id="item_name" name="name" required>
            </div>


            <div class="form-group">
                <label>Price</label>
                <input type ="number" id="item_price" name="price" required>
            </div>


            <div class="form-group">
                <label>Quantity</label>
                <input type ="number" id="add_stock" name="stock" required>
            </div>





           <div>
            <label>Product Category</label>
            <select name="category" id="item_category">
                <option value="Papercraft">Papercraft</option>
                <option value="Wood Carving">Wood Carving</option>
                <option value="Crochet">Crochet</option>
                <option value="Pottery">Pottery</option>
                <option value="Jewelry">Jewelry</option>
                <option value="Weaving">Weaving</option>
                <option value="Woodcraft">Woodcraft</option>
                <option value="Leather">Leather</option>
                <option value="Painting">Painting</option>
                <option value="Candles">Candles</option>

            </div>
            
            <div class="form-group1">
                <label>Product Description</label>
                <textarea  id="item_details" name="details" rows="4" class="details" placeholder="Description"   required></textarea>
            </div>
            
            <a href="https://new.express.adobe.com/tools/remove-background" target="_blank">
            <button class="removebg" type="submit" >Remove Background </button>
            </a>


            <div class="form-group">

                <label for="profile-picture">Product Picture </label>

               <button class="file">    
                 <input type="file" id="product_image" name="image" accept="image/*" multiple>
                </button> 
            </div>
           
            <input type="submit" class="addbutton" value="Edit"></button>
        </form>
    </div>

    






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
                        <li><a href="./aboutus_form.html">About obra</a></li>
                        <li><a href="./obrapolicies_form.html">obra policies</a></li>
                       
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">support</h3>
                    <ul class="menu">
                        <li><a href="https://parcelsapp.com/en/carriers/philippines-post" target="_blank" >order tracking</a></li>
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
    <script src="./js/app.js"></script>
    <script src="./js/products.js"></script>
</body>

</html>