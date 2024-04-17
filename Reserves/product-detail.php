<?php  

    include 'connection.php';
    include 'session_start.php';


    $sql = "SELECT * FROM product WHERE Product_ID = '".$_GET['product']."'";
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
                     
                </div>
            </div>
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img src="<?php echo $row["product_image"] ?>" alt="">
                        <?php }} ?>  
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <img src="./images/ART1.png" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="./images/ART3.png" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="./images/ART4.png" alt="">
                            </div>
                        </div>
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
                        </div>
       
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

                             } ?>
                                  
                        </div>
                        

                        <?php }}} ?>   
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    description
                </div>
                <div class="product-detail-description">
                    <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                        view all
                    </button>
                    <div class="product-detail-description-content">
                        <p>
                            A small crochet penguin is a charming and cuddly handmade creation crafted using soft yarn and a crochet hook. These adorable creatures typically stand a few inches tall, making them perfect for holding in the palm of your hand or displaying on a desk or shelf.
                        <img src="./images/ART1.png" alt="" class="imgdeets">
                        <p>
                            The crochet penguin is meticulously stitched with attention to detail, featuring the classic black and white coloration of a real penguin. Its round body is adorned with crocheted flippers, which give it a playful and lifelike appearance. The face of the penguin often includes two small crocheted eyes and a tiny beak, adding to its endearing charm.
                        </p>
                        <img src="./images/ART1.png" class="imgdeets">>
                        <p>
                            These crochet penguins are not only delightful decorations but also make wonderful gifts for penguin lovers of all ages. They bring a touch of whimsy and coziness to any space and are sure to bring smiles wherever they go. Whether used as a toy, a decorative accent, or a keepsake, a crochet penguin is a delightful addition to any collection.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    review
                </div>
                <div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/ALEX.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Alex Talamor</span>
                                <span class="ratingpro">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                        cute haha
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/ALEX.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Alex Talamor1</span>
                                <span class="ratingpro">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            labyu!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/ALEX.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Alex Talamor2</span>
                                <span class="ratingpro">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            miss you
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/ALEX.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Alex Talamor3</span>
                                <span class="ratingpro">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                          di na ako galit
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/ALEX.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Alex Talamor4</span>
                                <span class="ratingpro">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            MISS NA KITA AAAAAACCCCKKKKKKKKKKKKKKKKKKK!!!!
                        </div>
                    </div>
                    <div class="box">
                        <ul class="pagination">
                            <li><a href="#"><i class='bx bxs-chevron-left'></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class='bx bxs-chevron-right'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
           

                
            </div>

            

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="latest">related products</h2>
            </div>
            <div class="product-list">

                <li>
                  
 
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART1.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <a href="./product-detail.html">
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
                                Crochet Penguin
                            </div>
                            <div class="product-card1-price">
                                <span><del>200</del></span>
                                <span class="curr-price">50</span>
                            </div>
                        </div>
                    </div>
        
    
                <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART2.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                        <div class="product-card-name">
                            Crochet Girl
                        </div>
                        <div class="product-card-price">
                            <span><del>200</del></span>
                            <span class="curr-price">50</span>
                        </div>
                    </div>
                </div>


    
                <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART3.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                        <div class="product-card-name">
                            Wooden Vase
                        </div>
                        <div class="product-card-price">
                            <span><del>200</del></span>
                            <span class="curr-price">50</span>
                        </div>
                    </div>
                </div>


                <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART4.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                        <div class="product-card-name">
                           Rattan Basket
                        </div>
                        <div class="product-card-price">
                            <span><del>200</del></span>
                            <span class="curr-price">50</span>
                        </div>
                    </div>
                </div>



                <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART5.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                        <div class="product-card-name">
                            Rattan Coaster
                        </div>
                        <div class="product-card-price">
                            <span><del>200</del></span>
                            <span class="curr-price">50</span>
                        </div>
                    </div>
                </div>
    
    
    
                <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART6.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                        <div class="product-card-name">
                            Porcelain Bull
                        </div>
                        <div class="product-card-price">
                            <span><del>200</del></span>
                            <span class="curr-price">50</span>
                        </div>
                    </div>
                </div>
    
    



                <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART7.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                          <div class="product-card-name">
                              Origami Swan
                          </div>
                          <div class="product-card-price">
                              <span><del>200</del></span>
                              <span class="curr-price">50</span>
                          </div>
                      </div>
                  </div>
      

                  <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART8.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                          <div class="product-card-name">
                              Origami Peacock
                          </div>
                          <div class="product-card-price">
                              <span><del>200</del></span>
                              <span class="curr-price">50</span>
                          </div>
                      </div>
                  </div>
      
                  <li>
                    <div class="product-card1">
                        <div class="product-card1-img">
                            <img src="./images/ART9.png">
                            <img src="./images/2ndpic.png">
                        </div>
                        <div class="product-card1-info">
                            <div class="product-btn1">
                                <button class="btn-flat1 btn-hover1 btn-shop-now">shop now</button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat1 btn-hover1 btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                          <div class="product-card-name">
                              Clay Vase
                          </div>
                          <div class="product-card-price">
                              <span><del>200</del></span>
                              <span class="curr-price">50</span>
                          </div>
                      </div>
                  </div>
      







                
                </li>
               
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