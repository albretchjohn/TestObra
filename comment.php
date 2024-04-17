<?php  

    include 'connection.php';
    include 'session_start.php';

    $orderID = $_POST['orderID'];
    $loginID = $_POST['loginID'];
    $comment = $_POST['comment'];
    $productID = $_POST['productID'];
  
    

    $sql_drop = "DELETE FROM orders
    WHERE ORDERID = '$orderID'";

    mysqli_query($conn, $sql_drop);




    $sql = "INSERT INTO comments(Acc_ID, Product_ID, comment)
            VALUES ('$loginID','$productID',' $comment')";
  
  
    mysqli_query($conn, $sql);

    

    mysqli_close($conn);

                                         //header ("Location: http://localhost/1.Obra/signin_form.php?OTP=" . urlencode($OTP)); ///$_POST[image]

                                        // header ("Location : http://localhost/1.Obra/admin.php?added=" . urlencode($added)); 
   header ("Location: http://localhost/1.Obra/orderlist_form.php");

    
?>