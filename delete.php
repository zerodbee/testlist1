<?php
session_start();
include "connect.php";

error_reporting(0);

$user_id_number = $_SESSION['user']['id'];

$stmt = $connect->prepare("DELETE FROM tasks WHERE user_id = ?");
$stmt->bind_param("i", $user_id_number);

if ($stmt->execute() === TRUE) {
    echo "";
    header('location: index.php');
} else {
    $_SESSION['message'] = 'You need to log in and add your tasks';
    header('location: index.php');
}
?>