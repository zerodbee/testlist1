<?php
include "../connect.php"; 
    session_start();
    error_reporting(0);



    if (!($_SESSION['user'])) {

        header("Location: reg.php");

    }
    else {
        header("Location: profile.php");

    }
?>  