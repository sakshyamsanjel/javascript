<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakshyam";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM person_table";
$result = $connection->query($sql);

session_start(); 
?>
<header>
        <div class="buttons">
            <a href="./login.php"> <button class="button1">Log Out</button></a>
            <a href="./data.php"> <button class="button2">Edit</button></a>
            <a href="./data.php"> <button class="button3">Delete</button></a>
            
            
          </div>
    </header>
    <div class="container1">
        <nav class="row">
            <ul class="van">
                <li>Home</li>
                <li>About Us</li>
                <li>Contact Us</li>
            </ul>
        </nav>
    </div>
   
</body>
</html>