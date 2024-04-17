<?php  

    include 'connection.php';
    include 'session_start.php';


    $sql = "SELECT product.*, account.*
        FROM product
        JOIN account ON product.Acc_ID = account.Acc_ID
        WHERE product.Product_ID = '".$_GET['product']."'";

    $result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBRA.</title>
    <!-- google font links connect -->
    <link rel="shortcut icon" href="./images/OBHAHA.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- css links -->
    <link rel="stylesheet" href="./css/grid.css">
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
                        <!-- end ng mega menu -->
                        <li><a href="#">HELP</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end ng header -->

    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.php">home</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./products2.php">all products</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <?php if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_assoc($result)){ ?>
                    <a href="./product-detail.php?product=<?php echo $row["Product_ID"] ?>"><?php echo $row['Product_Name'] ?> </a>
                    <?php $Product_ID = $row["Product_ID"] ?>
                </div>
            </div>
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img src="<?php echo $row["product_image"] ?>" alt="">
                        <?php }} ?>  
                    </div>
                    
                </div>
                <div class="col-7 col-md-12">
                    <div class="product-info">
                    <?php if (mysqli_num_rows($result) > 0) {
                        mysqli_data_seek($result, 0);
             while ($row = mysqli_fetch_assoc($result)){ ?>
                        <h1>
                            <?php echo  $row['Product_Name']  ?>
                        </h1>
                   
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Category:</span>
                            <a href="#"><?php echo  $row['Category']  ?></a>
                            <p>Seller: <a href="link_to_seller_profile.php"><?php echo $row['Username']; ?></a></p>
                        </div>
                        <?php $category = $row['Category'] ?>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Rated:</span>
                            <span class="ratingpro">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                        <p class="product-description">
                        <a href="#"><?php echo  $row['Details']  ?></a>
                        <div class="product-info-price"><a href="#"><?php echo "₱ " .  $row['Price']  ?></a></div>
                        <div class="product-quantity-wrapper">
                            
                            <span class="product-quantity">Stock: <a href="#"><?php echo  $row['Stock']  ?></a></span>
                           
                            <?php //}} ?>     
                            </span>
                        </div>
                        <div>
                            
                        
                       <?php if (!isset($_SESSION['loggedInID'])) {
                            echo '<button class="btn-flat1 btn-hover" disabled>Please login</button>';
                        } ?>
                        

                        <?php
                        if (isset($_SESSION['loggedInID'])) {
                        if($_SESSION['loggedInID'] == $row['Acc_ID']) {    
                            echo '<button class="btn-flat1 btn-hover" disabled>Cannot add own item</button>'; 
                                                      

                        }else {

                            //echo '<form action="./cart1.php?cart_page='  . $_SESSION['loggedInID'] .  '" method="post">';
                            echo '<form action="./add_to_cart.php" method="post">';
                            echo '<input type="hidden" name="product_id" value="' . $row['Product_ID']  . '">';                           
                            echo '<button type="submit" class="btn-flat1 btn-hover" >add to cart</button>';
                            echo '</form>' ;

                             } ?>
                                  
                        </div>
                        

                        <?php }}} ?>   
                    </div>
                </div>
            </div>

            <?php 
                    $itemsPerPage = 6;

                    // Current page
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($current_page - 1) * $itemsPerPage;

                    // Fetch total number of rows from your database
                    $sqlTotalRows = "SELECT COUNT(*) AS total 
                                    FROM comments 
                                    JOIN product ON comments.Product_ID = product.Product_ID
                                    WHERE product.Product_ID = '".$_GET['product']."'";

                    $resultTotalRows = $conn->query($sqlTotalRows);
                    $rowTotalRows = $resultTotalRows->fetch_assoc();
                    $totalRows = $rowTotalRows['total'];

                    // Calculate total number of pages
                    $totalPages = ceil($totalRows / $itemsPerPage);

                    // SQL query to fetch data for the current page
                    $sqlData = "SELECT comments.*, account.*, product.*
                    FROM comments
                    JOIN account ON comments.Acc_ID = account.Acc_ID
                    JOIN product ON comments.Product_ID = product.Product_ID
                    WHERE product.Product_ID = '".$_GET['product']."'
                    LIMIT $start, $itemsPerPage";
                    $resultData = $conn->query($sqlData);



                    // Display fetched data

                            
                            echo '<div class="box">';
                            echo    '<div class="box-header">';
                            echo        'Review';
                            echo   '</div>';
                        if ($resultData->num_rows > 0) {
                        while ($row = $resultData->fetch_assoc()) { // Display your data Below ?>
                                <div class="review-content">
                                    <div class="user-rate">
                                        <div class="user-info">
                                            <div class="user-avt">
                                                <img src="<?php echo $row['profile_picture'] ?>" alt="">
                                            </div>
                                            <div class="user-name">
                                                <span class="name"><?php echo $row['Username'] ?></span>
                                            </div>
                                        </div>
                                        <div class="user-rate-content">
                                        <?php echo $row['Comment'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }} 
                        else {
                        echo "No Data";
                    } ?>

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
                    //$conn->close();
                    ?>



            

        
           

                
    </div>

            <?php

            $sql_related = "SELECT * FROM product WHERE Stock > 0 AND Category = '$category' AND Product_ID != '$Product_ID'  ORDER BY Product_ID DESC LIMIT 6";
            $result_related = mysqli_query($conn, $sql_related);

            ?>

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="latest">related products</h2>
            </div>
            <div class="product-list">
                <?php if (mysqli_num_rows($result_related) > 0) {
                    mysqli_data_seek($result_related, 0);
                    while ($rows = mysqli_fetch_assoc($result_related)){ ?>  
                        <li>
                        
        
                            <div class="product-card1">
                                <div class="product-card1-img">
                                <img src="<?php echo $rows['product_image'] ?>">
                                <img src="./images/2ndpic.png">
                                </div>
                                <div class="product-card1-info">
                                    <div class="product-btn1">
                                        <a href="./product-detail.php?product=<?php echo $rows["Product_ID"] ?>">
                                        <button class="btn-flat1 btn-hover1 btn-shop-now">Visit</button>
                                        </a>
                                        <button class="btn-flat1 btn-hover1 btn-cart-add">
                                            <i class='bx bxs-cart-add'></i>
                                        </button>
                                        <button class="btn-flat1 btn-hover1 btn-cart-add">
                                            <i class='bx bxs-heart'></i>
                                        </button>
                                    </div>
                                    <div class="product-card1-name">
                                    <?php   echo $rows["Product_Name"] ?>                                                          
                                    </div>
                                    <div class="product-card1-price">
                                        
                                        <span class="curr-price"><?php   echo "₱ " . $rows["Price"] ?></span>
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
        </div>
    </div>
    <!-- end product-detail content -->

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
                        <li><a href="https://parcelsapp.com/en/carriers/philippines-post" target="_blank"> order tracking</a></li>
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
    <!--script src="./js/app.js"></script-->
    <!--script src="./js/product-detail.js"></script-->
</body>

</html>