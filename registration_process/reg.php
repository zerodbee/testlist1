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

        <form method="POST" action="session.php" style="text-align:center; padding: 50px;">
            <p>Log in</p>
            <input type="text" name='name' value="" placeholder='name'><br>
            <input type="password" name='password' placeholder='Пароль'><br>
            <p style="text-align: center;">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </p>
            <input type="submit" name='auth' value="Войти"><br>

            <p>New user?</p><a href="users.php">Registration</a><br>
            <a href="../index.php">Home page</a>
        </form>

    

<?php
    $name=$_POST['name'];
    $password=$_POST['password'];
    $auth=$_POST['auth'];


?>
</body>
</html>