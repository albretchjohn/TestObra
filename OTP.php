<?php
    include 'session_start.php';
    include 'connection.php';
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $otp = rand(1000,9999);
    
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'obrasample@gmail.com';                     //SMTP username
        $mail->Password   = 'bnob isbg kkvd fgev';                               //SMTP password
        //$mail->Password   = 'Obra_1234';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('obrasample@gmail.com');
        $mail->addAddress($_POST['email']);     //Add a recipient
    
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'One Time Password';
        $mail->Body    = 'Your One Time Password is: ' . $otp;
       
    
        $mail->send();
       echo "<script> alert('OTP Sent'); </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } ?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBRA Verification</title>
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

    <form action = "register.php" method = "post">
    <section class="verif_sec"> 

        <div class="verif"> 
     
         <div class="content"> 
     
          <h2 class="">Account Verification</h2> 
     
          <div class="form"> 
            <div class="inputBox"> 
     
                
                <input type="text" id="OTP" name="otpcheck">
                <input type="hidden" id = "email_address"  name = "email" value= <?php echo $email ?>>
                <input type="hidden" id="username" name = "user" value =<?php echo $user ?>>
                <input type="hidden" id="password" name = "pass" value =<?php echo $pass ?>>
                <input type="hidden" id="OT" name = "otpconfirm" value =<?php echo $otp ?>>
                
         
               </div> 

               <div class="inputBox"> 
                


                
                <input type="submit" value="Submit"> 
                
               </div> 
     
          
     
         </div> 
     
        </div> 
     
       </section> 
       </form>
     
      </body>
     
     </html>