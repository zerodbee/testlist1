<?php  
session_start();
include "connect.php"; 

error_reporting(0); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="style.css">
    <title>Tasks</title>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box;">

<a style="position: absolute; margin-left: 50px; margin-top: -20px; color: black;" href="registration_process/session2.php">Profile</a>


    <p style="text-align: center; font-size: 50px; font-weight: bold;">Task list</p>
    <p style="text-align: center;">(Make sure you are logged in)</p>

    <form method="POST">
        <div class="frm_style">
            <input class="text_style" name="task" type="text" placeholder="Enter text...">
            <input class="btn_style1" name="btn1" type="submit" value="Add task"><br>

        <div class="btns">
            <a href="delete.php"><input style="border: 2px solid; background-color: white; color: black;" name="btn2" class="btn_style" type="button" value="Remove all my tasks"></a>
            <input style="border: 2px solid; background-color: white; color: black;" name="btn3" class="btn_style" type="submit" value="Ready all">
            <input style="border: 2px solid; background-color: white; color: black;" name="btn4" class="btn_style" type="submit" value="Cancel all">

        </div>
        </div>
    </form>


    <p style="text-align: center; font-size: 25px; font-weight: bold;">All notes:</p>

    <p style="text-align: center; color: red;">
<?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
?>
</p>
    <hr>


    <?php

    $task = $_POST['task'];
    $btn1 = $_POST['btn1'];

    $btn2 = $_POST['btn3'];
    $btn3 = $_POST['btn3'];

    $btn4 = $_POST['btn4'];

    $user_idd = $_SESSION['user']['id'];

if (isset($_POST['btn3'])) {

    $sql1 = "UPDATE `tasks` SET `color` = +1";
    mysqli_query($connect, $sql1);

} 

if (isset($_POST['btn4'])) {
    $sql1 = "UPDATE `tasks` SET `color` = '0'";
    mysqli_query($connect, $sql1);


}
    $add_task1="INSERT INTO `tasks` (`id`, `task`, `user_id`, `color`) VALUES (NULL, '$task', '$user_idd', '0');";

    if ($btn1) {
        if ($task) {
            $run_add_task=mysqli_query($connect, $add_task1);

    } else {

}

}


include "newtasks.php";

    ?>







</body>
</html>