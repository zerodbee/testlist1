<?php
include "connect.php";

error_reporting(0);

session_start();


$regUserId = $_SESSION['user']['id'];
$colornum = $_SESSION['tasks']['color'];

$sql = "SELECT * FROM tasks WHERE user_id = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param("i", $regUserId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $color = ($row['color'] == 0) ? "black" : "green";
        echo "<p style='text-align:center;padding:10px;color:" . $color . ";'>" . $row['task'] . "<hr>";
    }
} else {
    echo "<p style=text-align:center;>0 Results</p>";
}

$stmt->close();
$connect->close();
?>