<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT customers.name, orders.order_details 
        FROM customers 
        LEFT JOIN orders 
        ON customers.id = orders.customer_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Customer Name: " . $row["name"]. " - Order Details: " . $row["order_details"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
