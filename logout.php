<?php
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["loggedInID"]);

    header('Location: http://localhost/1.Obra/');

?>