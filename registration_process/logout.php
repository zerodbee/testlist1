<?php
session_start();
include "../connect.php";

if ($_SESSION['user']) {
    session_unset();

}
header('Location: ../index.php');







?>