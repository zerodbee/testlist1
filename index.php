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

    <a style="position: absolute; margin-left: 50px; margin-top: -20px; color: black;"
        href="registration_process/session_check.php">Profile</a>


    <p style="text-align: center; font-size: 50px; font-weight: bold;">Task list</p>
    <p style="text-align: center;">(Make sure you are logged in)</p>

    <form method="POST">
        <div class="frm_style">
            <input class="text_style" name="task" type="text" placeholder="Enter text...">
            <input class="btn_style1" name="task_button" type="submit" value="Add task"><br>

            <div class="btns">
                <a href="delete.php"><input style="border: 2px solid; background-color: white; color: black;"
                        name="remove_button" class="btn_style" type="button" value="Remove all my tasks"></a>
                <input style="border: 2px solid; background-color: white; color: black;" name="ready_button"
                    class="btn_style" type="submit" value="Ready all">
                <input style="border: 2px solid; background-color: white; color: black;" name="cancel_button"
                    class="btn_style" type="submit" value="Cancel all">

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
    include "addtasks.php";
    include "newtasks.php";
    ?>







</body>

</html>