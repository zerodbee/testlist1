<?php
session_start();
include "connect.php"; 

error_reporting(0); 

$user_iid = $_SESSION['user']['id'];


$sql = "DELETE FROM `tasks` WHERE  `user_id` = $user_iid";

if ($connect->query($sql) === TRUE) {
    echo "";
    header('location: index.php');
} else {
    $_SESSION['message'] = '
    You need to log in and add your tasks';
    header('location: index.php');
}
?>

