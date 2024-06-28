<?php
require_once('db.php');
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    echo "Усі поля повинні бути заповнені";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;
        if ($user['status'] == 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: welcome.php");
        }
        exit();
    } else {
        echo "Немає такого користувача в базі даних";
    }
}
?>
