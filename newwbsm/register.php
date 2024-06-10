<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Усі поля повинні бути заповнені";
} else {
    if ($pass != $repeatpass) {
        echo "Паролі не співпадають";
    } else {
        $stmt = $conn->prepare("INSERT INTO `users` (login, pass, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $login, $pass, $email);

        if ($stmt->execute()) {
            header("Location: welcome.php"); // на welcome.php після успішної реєстрації
            exit();
        } else {
            echo "Помилка реєстрації: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>
