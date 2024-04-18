<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$sql = "SELECT id, name, price FROM products";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
    // Fetch all products
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    echo json_encode(['success' => true, 'data' => $products]);
} else {
    echo json_encode(['success' => false, 'data' => 'No products found']);
}

$conn->close();
?>
