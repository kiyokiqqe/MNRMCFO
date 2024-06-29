<?php
// Підключення до бази даних
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "ServicesDB"; // Змініть на назву вашої бази даних

// Створення з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL-запит для отримання послуг
$sql = "SELECT id, name, details, description FROM Services";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$services = array();

// Зчитування результатів запиту
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $services[] = $row;
    }
}

echo json_encode($services);

$stmt->close();
$conn->close();
?>
