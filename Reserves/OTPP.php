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
        $mail->Password   = 'wiatzuwdyfrxjujt';                               //SMTP password
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
<html>

<body>
        
        <form action = "register.php" method = "post">
            <label for = "OTP" > OTP:</label><br>
            <input type="text" id="OTP" name="otpcheck">
            <input type="hidden" id = "email_address"  name = "email" value= <?php echo $email ?>>
            <input type="hidden" id="username" name = "user" value =<?php echo $user ?>>
            <input type="hidden" id="password" name = "pass" value =<?php echo $pass ?>>
            <input type="hidden" id="OT" name = "otpconfirm" value =<?php echo $otp ?>>
            <input type="submit">
    </form>
</body>
</html>




