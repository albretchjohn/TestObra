<?php  

    include 'connection.php';
    include 'session_start.php';
    date_default_timezone_set("Asia/Manila");

   /* if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        //$data = file_get_contents($_FILES['image']['tmp_name']);
       echo "<pre>";
       print_r($_FILES['image']);
       echo "</pre>";
        } */


    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));





    $sql = "INSERT INTO product(Acc_ID, Product_Name, Details, Price, Category, Stock, Date_Created, product_image)
            VALUES ('$_POST[userID]', '$_POST[name]', '$_POST[details]', '$_POST[price]', '$_POST[category]', '$_POST[stock]' , TIMESTAMP(NOW()), '$imgContent' )";
  
  
    mysqli_query($conn, $sql);

    

    mysqli_close($conn);

                                         //header ("Location: http://localhost/1.Obra/signin_form.php?OTP=" . urlencode($OTP)); ///$_POST[image]

                                        // header ("Location : http://localhost/1.Obra/admin.php?added=" . urlencode($added)); 
   header ("Location: http://localhost/1.Obra/admin.php");


?>