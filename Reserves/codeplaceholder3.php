<?php
    include 'session_start.php';
    include 'connection.php';
    
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
     //   $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'obrasample@gmail.com';                     //SMTP username
        $mail->Password   = 'wiatzuwdyfrxjujt';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('obrasample@gmail.com');
        $mail->addAddress('juggafk@gmail.com');     //Add a recipient
    
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'One Time Password';
        $mail->Body    = 'Your One Time Password is: ' . $otp;
       
    
        $mail->send();
       echo "<script> alert('OTP Sent'); </script>";
       // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } ?>


<!DOCTYPE html>
<html>

<body>
        <form method ="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for = "OTP" > OTP:</label><br>
            <input type="text" id="OTP" name="otpcheck">
            <input type="submit">
        </form>

</body>
</html>



<?php

    if ($_SERVER["REQUEST_METHOD"]=="POST"){

    if ($_POST['otpcheck'] = $otp){
    $check = ("SELECT * FROM account WHERE Username = '$_POST[user]' ");
   
   
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result)>=1){
        

        mysqli_close($conn);     

        
        

        header("Location: http://localhost/1.Obra/signin_form.php?Message=" . urlencode($Message));


    } else {

    
        $sql = "INSERT INTO account(Email, Username, Password )
        VALUES ('$_POST[email]', '$_POST[user]', '$_POST[pass]')";

        mysqli_query($conn, $sql);

            mysqli_close($conn);
            header("Location: http://localhost/1.Obra/login_form.php?Message=" . urlencode($Message));
            
    }
} else {

    mysqli_close($conn);

    header ("Location: http://localhost/1.Obra/signin_form.php?OTP=" . urlencode($OTP));
}
    }
?>