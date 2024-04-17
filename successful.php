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




if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $ID = $row['cart_id'];
        $Product_ID = $row['Product_ID'];
        $Seller_ID = (int)$row['Acc_ID'];//seller
        $price = $row['Price'];
        $quantity = $row['quantity'];
        $product = $row['Product_Name'];

        
        $total = $quantity * $price;

        


        $sql_orders = "INSERT INTO orders(SellerID, BuyerID, Product_ID, Quantity, Payment)
        VALUES('$Seller_ID', '$loginID', '$Product_ID','$quantity', '$total' )";

        mysqli_query($conn, $sql_orders);


        
        $sql_sold = "UPDATE product
        SET Sold = Sold + '$quantity'
        WHERE Product_ID = '$Product_ID'";

        mysqli_query($conn, $sql_sold);



        $sql_subtract = "UPDATE product
        SET Stock = Stock - '$quantity'
        WHERE Product_ID = '$Product_ID'";

        mysqli_query($conn, $sql_subtract);





        $sql_delete = "DELETE FROM cart WHERE cart_id='$ID'";

        mysqli_query($conn, $sql_delete);

      
       
        

    }}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
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


    <section class="payment_sec"> 

        <div class="paymentcont"> 
     
         <div class="content"> 
     
          <h2>Payment Success!</h2> 
     
          <div class="form"> 
     
      
            <div class="inputBox"> 
                <a href="./index.php">
                <input type="submit" value="Proceed To OBRA"> </a>
         
           </div> 
     
          </div> 
     
         </div> 
     
        </div> 
     
       </section> 
     
      </body>
     
     </html>