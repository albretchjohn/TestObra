<?php
    include 'connection.php';
    include 'session_start.php';





    $product_id = (int)$_POST['product_id'];
    $sql = "SELECT * FROM product WHERE Product_ID = '$product_id'";
    $result = mysqli_query($conn, $sql);
    $accID = $_SESSION["loggedInID"];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){

            $sql_add_to_cart = "INSERT INTO cart(Acc_ID, Product_ID) 
            VALUES ('$accID', '$product_id')";

            mysqli_query($conn, $sql_add_to_cart);

           

        }}
    

     $url = "./cart1.php?account="  . $_SESSION['loggedInID'];
    
    mysqli_close($conn);

    header ("Location: $url");
    
    
    
    //header ("Location: ./cart1.php?account="  . $_SESSION['loggedInID']);