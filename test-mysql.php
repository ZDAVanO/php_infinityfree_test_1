<?php
$servername = "sql312.infinityfree.com";
$username = "if0_38496044";
$password = "W9RneO2Pke";
$dbname = "if0_38496044_test_1"; // Замініть XXX на відповідну назву вашої бази даних

// Створення підключення
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка підключення
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Виконання SQL-запиту
$sql = "SELECT id, name FROM users"; // Заміна на існуючу таблицю
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Виведення даних кожного рядка
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>