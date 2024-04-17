<?php
require_once 'config.php';

$multiply=0;
$total=0;
$i = 0;
$quantities = $_POST['quantity'];

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
            $price = $row['Price'];
            $multiply = $price * $quantities[$i];

            $sql_add = "UPDATE cart
            SET quantity = quantity + '$quantities[$i]'
            WHERE cart_id = '$ID'";

            mysqli_query($conn, $sql_add);

            $i = $i+1;
            $total = $multiply + $total;
            

        }}

        $Shipping = $Shipping + $total;



if (isset($_POST['submit'])) {

    try {
        $response = $gateway->purchase(array(
            'amount' => $Shipping,
            'currency' => PAYPAL_CURRENCY,
            'returnUrl' => PAYPAL_RETURN_URL,
            'cancelUrl' => PAYPAL_CANCEL_URL,
        ))->send();

        if ($response->isRedirect()) {
            $response->redirect(); // this will automatically forward the customer
        } else {
            // not successful
            echo $response->getMessage();
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}