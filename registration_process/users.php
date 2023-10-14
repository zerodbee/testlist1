<!DOCTYPE html>

<?php  

include "../connect.php"; 
session_start();


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" style="text-align:center; padding: 50px;">
    <p>Registration</p>
    <input class="text_style" name="name" type="text" placeholder="Enter name"><br>
    <input class="text_style" name="password" type="password" placeholder="Enter password"><br>
    <input class="btn_style1" name="conf" type="submit" value="Confirm"><br>

    <a href="../index.php">Home page</a>
    </form>


<?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    $conf = $_POST['conf'];

    $add_user_sql = "INSERT INTO users (id, name, password) VALUES (NULL, '$name', '$password');";

if ($conf) {
    if (!empty($name) && !empty($password)) {
        $runuser = mysqli_query($connect, $add_user_sql);
        header('location: reg.php');
        $_SESSION['message'] = 'Success!';
    } else {
        $_SESSION['message'] = 'Error';
        header('location: reg.php');
    }
}

?>

</body>
</html>