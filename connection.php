<?php      
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "obra";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check Connection
    if (!$conn){
        die("Connection Failed: " . mysqli_connect_error());

    }
?>  