<?php
    session_start();
    if (isset($_SESSION["Group"])) {
        unset($_SESSION["Group"]);
    }
    if (isset($_COOKIE["userID"])) {
        setcookie("userID", "", time()-3600);
    }
    header("Location: login.php");
 ?>
