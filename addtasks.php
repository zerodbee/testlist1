<?php

$task = $_POST['task'];
$task_button = $_POST['task_button'];
$remove_button = $_POST['remove_button'];
$ready_button = $_POST['ready_button'];
$cancel_button = $_POST['cancel_button'];
$user_id_number = $_SESSION['user']['id'];


if (isset($_POST['cancel_button'])) {

    $color = 0;
    $userId = $_SESSION['user']['id'];

    $sql_upd = "UPDATE tasks SET color = ? WHERE user_id = ?";
    $stmt = $connect->prepare($sql_upd);

    $stmt->bind_param("ii", $color, $userId);

    $stmt->execute();
}

if (isset($_POST['ready_button'])) {

    $color = 1;
    $userId = $_SESSION['user']['id'];

    $sql_upd = "UPDATE tasks SET color = ? WHERE user_id = ?";
    $stmt = $connect->prepare($sql_upd);

    $stmt->bind_param("ii", $color, $userId);

    $stmt->execute();

}


if ($task_button) {
    if ($task) {
        $prepare = $connect->prepare("INSERT INTO tasks (id, task, user_id, color) VALUES (NULL, ?, ?, '0')");
        $prepare->bind_param("ss", $task, $user_id_number);
        $prepare->execute();
    }
}
?>