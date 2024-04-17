<?php  

    include 'connection.php';
    include 'session_start.php';




    $sql = "SELECT * FROM product WHERE Stock > 0";
    
   
    $result = mysqli_query($conn, $sql);

    

?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the checkbox element
    var checkbox1 = document.getElementById('status1');
    var checkbox2 = document.getElementById('status2');
    var checkbox3 = document.getElementById('status3');
    var checkbox4 = document.getElementById('status4');
    var checkbox5 = document.getElementById('status5');
    var checkbox6 = document.getElementById('status6');
    var checkbox7 = document.getElementById('status7');
    var checkbox8 = document.getElementById('status8');
    var checkbox9 = document.getElementById('status9');
    var checkbox10 = document.getElementById('status10');
    
    // Add an event listener for when the checkbox is clicked
    checkbox1.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_WoodCarve.php';
        }
    });
    checkbox2.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_Crochet.php';
        }
    });
    checkbox3.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_Jewelry.php';
        }
    });
    checkbox4.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_Weaving.php';
        }
    });
    checkbox5.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_WoodCraft.php';
        }
    });
    checkbox6.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_Leather.php';
        }
    });
    checkbox7.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_Painting.php';
        }
    });
    checkbox8.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_Candles.php';
        }
    });
    checkbox9.addEventListener('change', function() {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, redirect to another PHP file
            window.location.href = 'products_Pottery.php';
        }
    });

});
</script>

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
    <!-- box icons and shit -->
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


    <!-- products content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.php">home</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./products2.php">all products</a>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    <div class="col-3 filter-col" id="filter-col">
                        <div class="box filter-toggle-box">
                            <button class="btn-flat btn-hover" id="filter-close">close</button>
                        </div>
                        <div class="box">
                            <span class="filter-header">
                                Categories
                                </span>
                                <div class="box">
                                    <ul class="filter-list">
                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status1">
                                                <label for="status1">
                                                Wood Carving
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status2">
                                                <label for="status2">
                                                Crochet
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status3">
                                                <label for="status3">
                                                Jewelry
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status4">
                                                <label for="status4">
                                                Weaving
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status5">
                                                <label for="status5">
                                                Woodcraft
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status6">
                                                <label for="status6">
                                                    Leather
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status7">
                                                <label for="status7">
                                                    Painting
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status8">
                                                <label for="status8">
                                                    Candles
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>

                                          <li>
                                            <div class="group-checkbox">
                                                <input type="checkbox" id="status9">
                                                <label for="status9">
                                                    Pottery
                                                    <i class='bx bx-check'></i>
                                                </label>
                                            </div>
                                        </li>
                                        








                                        
                                    </ul>
                                </div>
                            </div>

                            <div class="box">
                                <span class="filter-header">
                                    
                                </span>
                                <div class="box">
                                <ul class="filter-list">
                                    
    

                                    
                                </ul>
                            </div>
                             <br>
                             <br>
                                <span class="filter-header">
                                    
                                </span>
                                <div class="price-range">

                                </div>
                            <div class="box">
                            
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
                    $sqlData = "SELECT * FROM product WHERE Stock > 0 LIMIT $start, $itemsPerPage";
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
                                                
                                            </div>
                                            <div class="product-card1-info">
                                                <div class="product-btn12">
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
                        <li><a href="https://parcelsapp.com/en/carriers/philippines-post" target="_blank"> order tracking</a></li>
                        <li><a href="./accountsettings.html" > Account Settings </a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header2">
                            OBRA.
                        </h3>
                        <ul class="contact-socials2">
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
    <!--script src="./js/products.js"></script-->
</body>

</html>