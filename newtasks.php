<?php
include "connect.php";

error_reporting(0); 

session_start();

$task_id_number = $_SESSION['tasks']['id'];

$str_out_task="SELECT * FROM `tasks` WHERE `id`";
$run_out_task=mysqli_query($connect, $str_out_task);


if (mysqli_num_rows($run_out_task) > 0) {
    while ($row = mysqli_fetch_assoc($run_out_task)) {

        if ($row['color'] == 0) {
            echo '<p class=roww style="">' . $row['task'] . '<hr></p>
';
        } elseif ($row['color'] == 1) {
            echo '<p class=roww style="color:green;">' . $row['task'] . '<hr></p>
';
        }
    }
}

?>