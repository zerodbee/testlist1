<!DOCTYPE html>
<?php

include "../connect.php";

session_start();
error_reporting(0);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel='stylesheet' href="../style.css">
</head>

<body>

    <div style="text-align: center; margin-top: 30px;">
        <a style="color: black;" href="../index.php">Home page</a>
        <a style="color: red;" href="logout.php">Logout</a>
    </div>

    <form method="POST" style="text-align: center;">
        <p style="font-size: 25px; font-weight: bold; padding: 30px;">Hello,
            <?= $_SESSION['user']['name'] ?>!
        </p>
        <p style="font-size: 15px; padding-bottom: 30px;">Your password:
            <?= $_SESSION['user']['password'] ?>
        </p>


        <hr>

    </form>

<?php

?>


</body>

</html>