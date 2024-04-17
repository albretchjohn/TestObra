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
            $sql_cancel = "UPDATE cart
            SET quantity = 0
            WHERE cart_id = '$ID'";

            mysqli_query($conn, $sql_cancel);

            

        }}


?>