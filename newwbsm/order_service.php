<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login_form.php");
    exit();
}

$user = $_SESSION['user'];
$service_id = $_POST['service_id'];

//gідключення до бд
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ServicesDB";

//зєднання
$conn = new mysqli($servername, $username, $password, $dbname);

//перевірка зєднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//додавання замовлення
$sql = "INSERT INTO Orders (user_id, service_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user['id'], $service_id);

if ($stmt->execute()) {
    echo "Замовлення успішно додано!";
} else {
    echo "Помилка: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: services.php");
exit();
?>
