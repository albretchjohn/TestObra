<?php  

    include 'connection.php';
    include 'session_start.php';
    date_default_timezone_set("Asia/Manila");

    $productID=$_POST['productID'];

    $targetDir = "uploads/";

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {    
      
        $targetFilePath = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']["tmp_name"], $targetFilePath);
        

    }

    //$allowTypes = array('jpg','png','jpeg');
    




    $sql = "UPDATE product 
        SET Acc_ID = '{$_POST['userID']}', 
            Product_Name = '{$_POST['name']}', 
            Details = '{$_POST['details']}', 
            Price = '{$_POST['price']}', 
            Category = '{$_POST['category']}', 
            Stock = '{$_POST['stock']}', 
            product_image = '$targetFilePath' 
        WHERE Product_ID = '{$_POST['productID']}'";
  
  
    mysqli_query($conn, $sql);

    

    mysqli_close($conn);

                                         //header ("Location: http://localhost/1.Obra/signin_form.php?OTP=" . urlencode($OTP)); ///$_POST[image]

                                        // header ("Location : http://localhost/1.Obra/admin.php?added=" . urlencode($added)); 
   header ("Location: http://localhost/1.Obra/products_stock.php");

    
?>