<?php  

    include 'connection.php';
    include 'session_start.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>
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
                <div class="search">
                    <input type="search" placeholder="Search for products, brands and users">
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
                        <a href="./products.html">Shop<i class='bx bxs-chevron-down'></i></a>
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
          <a href="./orderlist_form.php" >
            <span class="material-icons-sharp"> receipt_long </span>
            <h3>Orders</h3>
          </a>
       
          <a href="#">
            <span class="material-icons-sharp"> mail_outline </span>
            <h3>Messages</h3>
            <span class="message-count">26</span>
          </a>
          <a href="./products_stock.php">
            <span class="material-icons-sharp"> inventory </span>
            <h3>Products Stock</h3>
          </a>
         
          <a href="#">
            <span class="material-icons-sharp"> settings </span>
            <h3>Settings</h3>
          </a>
        
          <a href="./logout.php" >
            <span class="material-icons-sharp"> logout </span>
            <h3>Logout</h3>
          </a>
        </div>
      </aside>

      

      <!-- ========== Main section ========== -->
      <main>
        <h1>User Dashboard</h1>
        <div class="date">
          <input type="date" id="date-picker" />
        </div>
        <div class="insights">
          

          
          <!-- ---------- Sales ---------- -->
          <div class="sales">
            <span class="material-icons-sharp"> analytics </span>
            <div class="middle">
              <div class="left">
                <h3>Total Sales</h3>
                <h1>₱25,024</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>81%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>

          <!-- ---------- Expenses ---------- -->
          <div class="expenses">
            <span class="material-icons-sharp"> bar_chart </span>
            <div class="middle">
              <div class="left">
                <h3>Total Expenses</h3>
                <h1>₱14,162</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>62%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>

          <!-- ---------- Income ---------- -->
          <div class="income">
            <span class="material-icons-sharp"> stacked_line_chart </span>
            <div class="middle">
              <div class="left">
                <h3>Total Income</h3>
                <h1>₱10,864</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>44%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>
        </div>

        <!-- ---------- Recent orders ---------- -->
        <div class="recent-orders">
          <h2>Recent Orders</h2>
          <table>
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Number</th>
                <th>Payment</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody></tbody>
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
        <div class="recent-updates">
          <h2>Recent Notifications</h2>
          <div class="updates">
            <div class="update">
              <div class="profile-photo">
                <img src="images/ALEX.jpg" alt="Alex" />
              </div>
              <div class="message">
                <p>
                  <b>Artemis Fowl</b> Received the order with tracking no. 1234567.
                </p>
                <small class="text-muted">2 Minutes Ago</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="images/kween.jpg" alt="kween" />
              </div>
              <div class="message">
                <p><b>Kween Yasmin</b> Cancelled the order with tracking no. 1234567.</p>
                <small class="text-muted">10 Minutes Ago</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="images/ewan.jpg" alt="Ewan" />
              </div>
              <div class="message">
                <p>
                  <b>Di ko kilala</b> Received the order with tracking no. 1234567.
                </p>
                <small class="text-muted">15 Minutes Ago</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="images/ewan1.png" alt="Ewan" />
              </div>
              <div class="message">
                <p>
                  <b>Di ko din kilala</b> Received the order with tracking no. 1234567.
                </p>
                <small class="text-muted">34 Minutes Ago</small>
              </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="images/moshot.png" alt="Jaden" />
            </div>
            <div class="message">
              <p>
                <b>Jaden Moshot</b> Cancelled the order with tracking no. 1234567.
              </p>
              <small class="text-muted">34 Minutes Ago</small>
            </div>
        </div>
        </div>

        <!--  Sales analytics---------->
        <div class="sales-analytics">
        
          <div class="item add-product">
            <div>
            <a href="./additem.php" >
              <span class="material-icons-sharp"> add </span>
              <h3 >Add Product</h3>
            </a>
            </div>
          </div>

          
        </div>

        
      </div>

      
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
                    <li><a href="#">product help</a></li>
                    <li><a href="#">Southcom Village, Upper Calarian, Z.C.</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head"><strong>About us</strong></h3>
                <ul class="menu">
                    <li><a href="#">About obra</a></li>
                    <li><a href="#">obra policies</a></li>
                    <li><a href="#">privacy policy</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head"><strong>support</strong></h3>
                <ul class="menu">
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">product help</a></li>
                    <li><a href="#">warranty</a></li>
                    <li><a href="#">order tracking</a></li>
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
</div>
<!-- end footer -->
    


    <script src="./js/orders.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/admin.js"></script>


    <?php
        if (isset($_GET['added'])){
       
        echo "<script>alert('Item successfully added');</script>";
        }

?>
  </body>
</html>

