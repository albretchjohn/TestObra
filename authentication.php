<?php

    include 'connection.php';
    include 'session_start.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE Username = '$username' AND Password = '$password'";

    $result = mysqli_query($conn,$sql);
   // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$row = mysqli_fetch_assoc($result);
    $count =mysqli_num_rows($result);
   

    if ($count==1){

        while( $row = mysqli_fetch_assoc($result)){
            
        
        
        $_SESSION['ID'] = $row["Acc_ID"];
        $_SESSION['username'] = $username;
        
        }

        header("Location: http://localhost/1.Obra/index.php" );
       //echo $_SESSION['username'];
        
      
    } else {
        header("Location: http://localhost/1.Obra/login_form.php?Try=" . urlencode($Try));
    }




?>