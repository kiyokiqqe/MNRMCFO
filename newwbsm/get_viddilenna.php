<?php
// Підключення до бази даних
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Vidiilenna"; 

// Створення з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT description FROM Viddilenna WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($description);
    $stmt->fetch();
    echo nl2br(htmlspecialchars($description));
    $stmt->close();
}

$conn->close();
?>