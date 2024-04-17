<?php  

    include 'connection.php';
    include 'session_start.php';

    $ID = $_POST['productID'];




    $sql = "DELETE FROM product WHERE Product_ID = '$ID'";
  
  
    mysqli_query($conn, $sql);

    

    mysqli_close($conn);

                                         //header ("Location: http://localhost/1.Obra/signin_form.php?OTP=" . urlencode($OTP)); ///$_POST[image]

                                        // header ("Location : http://localhost/1.Obra/admin.php?added=" . urlencode($added)); 
   header ("Location: http://localhost/1.Obra/products_stock.php");

    
?>