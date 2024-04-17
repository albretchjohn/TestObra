<?php
    include 'connection.php';
    include 'session_start.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBRA.</title>
    <!-- google fonts para di na mag font face  -->
    <link rel="shortcut icon" href="./images/OBHAHA.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- box icons pati check mark -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
   
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>

    <form action="authentication.php" method = "post">
        <section class="signin_sec"> 

            <div class="signin"> 
        
            <div class="content"> 
        
            <h2>Sign In</h2> 
        
            <div class="form"> 
        
            <div class="inputBox"> 
        
                <input type="text" name= "username" required> <i>Username</i> 
        
            </div> 
        
            <div class="inputBox"> 
        
                <input type="password" name= "password" required> <i>Password</i> 
        
            </div> 
        
            <div class="links"> <a href="#">Forgot Password</a> <a href="./signin_form.php">Sign Up</a> 
        
            </div> 
        
            <div class="inputBox"> 
        
                <input type="submit" value="Login"> 
        
            </div> 
        
            </div> 
        
            </div> 
        
            </div> 
        
            </section> 
    </form>
       <?php
            if(isset($_GET['Message'])){
                echo "<script>alert('Successfully Created an Account');</script>";
            }

            if(isset($_GET['Try'])){
                echo "<script>alert('Invalid Credentials');</script>";
            }
       ?>
     
      </body>
     
     </html>