<?php
$name = mysqli_real_escape_string($connect, $_POST['name']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$auth = $_POST['auth'];

$check_user = "SELECT * FROM users WHERE name = ? AND password = ?";

$stmt = mysqli_prepare($connect, $check_user);
mysqli_stmt_bind_param($stmt, "ss", $name, $password);
mysqli_stmt_execute($stmt);
$check_user_query = mysqli_stmt_get_result($stmt);

if ($auth) {
    if ($name != "" && $password != "") {
        if (mysqli_num_rows($check_user_query) > 0) {

            $user = mysqli_fetch_assoc($check_user_query);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "password" => $user['password'],
            ];

            header('location: profile.php');
        } else {

            $add_user_sql = "INSERT INTO users (id, name, password) VALUES (NULL, '$name', '$password');";

            $runuser = mysqli_query($connect, $add_user_sql);


            $user = mysqli_fetch_assoc($check_user_query);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "password" => $user['password'],
            ];


            header('location: session_check.php');
        }
    } else {
        $_SESSION['message'] = 'Fields are empty';
        header('location: reg.php');
    }
}

?>