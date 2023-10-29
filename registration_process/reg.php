<?php
include "../connect.php";
session_start();
error_reporting(0);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="">
    <title>Log in</title>
</head>

<body>

    <form method="POST" style="text-align:center; padding: 50px;">
        <p>Authorization</p>
        <input type="text" name='name' value="" placeholder='Login'><br>
        <input type="password" name='password' placeholder='Password'><br>
        <p style="text-align: center;">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </p>
        <input type="submit" name='auth' value="Authorization"><br>

        <a href="../index.php">Home page</a>
    </form>



    <?php
    $auth = $_POST['auth'];
    $name = $_POST['name'];
    $password = $_POST['password'];


    include "session_add.php";



    ?>
</body>

</html>