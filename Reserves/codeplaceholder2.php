//  if ($_SERVER["REQUEST_METHOD"]=="POST"){
   // if (isset($_POST['Submit'])){
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
    
?>
</body>
</html>
