<?php  

    include 'connection.php';
    include 'session_start.php';
    $ID = $_SESSION["loggedInID"];

    $targetDir = "uploads/";

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {    
      
        $targetFilePath = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']["tmp_name"], $targetFilePath);

        $sql = "UPDATE account
        SET Address = '$_POST[address]', Bio = '$_POST[bio]' , profile_picture = '$targetFilePath'
        WHERE Acc_ID = '$ID'";

        mysqli_query($conn, $sql);
        

    } else {

        $sql2 = "UPDATE account
         SET Address = '$_POST[address]', Bio = '$_POST[bio]'
         WHERE Acc_ID = '$ID'";
      
      
        mysqli_query($conn, $sql2);

    }







    //$allowTypes = array('jpg','png','jpeg');
    




  
  
    mysqli_query($conn, $sql);

    

    mysqli_close($conn);

                                         //header ("Location: http://localhost/1.Obra/signin_form.php?OTP=" . urlencode($OTP)); ///$_POST[image]

                                        // header ("Location : http://localhost/1.Obra/admin.php?added=" . urlencode($added)); 
   header ("Location: http://localhost/1.Obra/");

    
?>