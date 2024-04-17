<?php  

    include 'connection.php';
    include 'session_start.php';



    $cartID = $_POST['cartID'];


    $sql = "DELETE FROM cart WHERE cart_id = '$cartID'";

    mysqli_query($conn, $sql);
   

    $url = "./cart1.php?account="  . $_SESSION['loggedInID'];
    
    mysqli_close($conn);

    header ("Location: $url");


?>