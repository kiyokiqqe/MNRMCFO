<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    echo "Usi pola ne zapovneni ";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['status'] == 'admin') {
            header("Location: admin.php"); //адміна в admin.php
        } else {
            header("Location: welcome.php"); // користувача в welcome.php
        }
        exit();
    } else {
        echo "Nemae tebe v DB";
    }
}
?>
