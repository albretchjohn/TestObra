<?php
        include 'connection.php';
        include 'session_start.php';
     //  include 'authentication.php';
    // $_SESSION['username'] = "Albretch";
    if (isset($_SESSION['username'])){
        echo $_SESSION['username'];
        $username_placeholder = $_SESSION['username'];
        $sql_get_accID = "SELECT * FROM account WHERE Username = '$username_placeholder' ";
        $result = mysqli_query($conn, $sql_get_accID);
        if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)){
            $_SESSION["loggedInID"] = $row['Acc_ID'];
            echo $_SESSION["loggedInID"];
        }}
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBRA.</title>
    <!-- google fonts para di na mag font face  -->
    <link rel="shortcut icon" href="./images/OBHAHA.png" type="image/x-icon" />
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
                    <form action="tbd.php" method="post">
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

    <!-- hero section -->
    <div class="hero">
        <div class="slider">
            <div class="container">
                <!-- slide item -->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Crochet Penguin
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Cuteness Overload
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                A small crochet penguin is a charming handmade creation crafted using soft yarn and a crochet hook. 
                                Typically measuring a few inches tall, it features the iconic black and white coloration of a penguin, 
                                with a cute rounded body, flippers, and a distinct beak. These adorable creations make delightful gifts or decorations, 
                                bringing a touch of whimsy and coziness to any space.cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <a href="./product-detail.html">

                                <button class="btn-flat1 btn-hover">
                                    <span>shop now</span>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="./images/ART1.png" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Princess Patch
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Let them know your the princess
                            </h2>
                            <p class="top-down trans-delay-0-4">

                                A "princess" patch is a small, decorative embroidered piece typically sewn onto clothing or accessories. 
                                It often features the word "princess" written in elegant script or adorned with sparkles, sequins, or other embellishments. 
                                These patches are popular among children and those who embrace their inner royalty, adding a touch of regal flair to jackets, backpacks, or even costumes. 
                                They can serve as a fun and empowering accessory, allowing the wearer to express their personality and embrace their inner princess.
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat1 btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="./images/ART17.png" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Paper Fowers
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Flowers for you!
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Origami flowers are delicate and intricate paper creations crafted through the traditional Japanese art of paper folding. Using a single square sheet of paper, 
                                artisans meticulously fold and crease the paper to create stunning floral designs that mimic the beauty of real flowers. Each petal, stem, and leaf is carefully 
                                formed through precise folding techniques, resulting in a lifelike and visually captivating final product. Origami flowers come in a variety of styles and designs,
                                 from simple roses and lilies to more intricate blossoms like cherry blossoms and orchids. These handmade creations are often used as decorations, gifts, or even as 
                                 components in larger origami displays, adding a touch of elegance and charm to any setting.
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat1 btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./images/ART18.png" alt="">
                    </div>
                </div>
                <!-- end slide item -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end ng slider controller -->
        </div>
    </div>
    <!-- end ng hero section -->

   
   
        <?php

        $sql = "SELECT * FROM product WHERE Stock > 0 ORDER BY Product_ID DESC LIMIT 6";
        $result = mysqli_query($conn, $sql);

        ?>


    <!-- product list -->


    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="latest">Latest products</h2>
            </div>
            <div class="product-list">
            <?php if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_assoc($result)){ ?>  
                <li>
                  
 
                    <div class="product-card1">
                        <div class="product-card1-img">
                        <img src="<?php echo $row['product_image'] ?>">
                        <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <a href="./product-detail.php?product=<?php echo $row["Product_ID"] ?>">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                </a>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
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

                <?php  }} ?>
               
            </div>


            <div class="section-footer">
                <a href="./products2.php" class="btn-flat1 btn-hover1">view all</a>
            </div>

        
        </div>
    </div>
</div>
</ul>
    <!-- end ng product list -->



            <?php

        $sql_best = "SELECT * FROM product WHERE Stock > 0 ORDER BY  Sold DESC LIMIT 9";

        $result_best = mysqli_query($conn, $sql_best);

        ?>
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="latest">BEST SELLING productS</h2>
            </div>

            <div class="product-list">

                 <?php if (mysqli_num_rows($result_best) > 0) {
             while ($row_best = mysqli_fetch_assoc($result_best)){ ?>  
                <li>
                  
 
                    <div class="product-card1">
                        <div class="product-card1-img">
                        <img src="<?php echo $row_best['product_image'] ?>">
                        <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <a href="./product-detail.php?product=<?php echo $row_best["Product_ID"] ?>">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                </a>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card1-name">
                            <?php   echo $row_best["Product_Name"] ?>                                                          
                            </div>
                            <div class="product-card1-price">
                                
                                <span class="curr-price"><?php   echo "₱ " . $row_best["Price"] ?></span>
                            </div>
                        </div>
                    </div>
     

                
                </li>

                <?php  }} ?>
    
    
                
               
            </div>

            <div class="section-footer">
                <a href="./products2.php" class="btn-flat1 btn-hover1">view all</a>
            </div>
        </div>
    </div>
</div>
</ul>
   
    <!-- product list -->
   
    <!-- end ng product list -->

    

    <!-- footer -->
    <footer class="footer" id="footer">
        <div class="container3">
          
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
                        <h3 class="contact-header3">
                            OBRA.
                        </h3>
                        <ul class="contact-socials3">
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

    <!-- js link -->
 
 
</body>

</html>