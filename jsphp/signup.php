<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "<h2>Data from POST Request:</h2>";
    echo "<p>Name: $name </p>";
    echo "<p>Email: $email </p>";
    echo "<p>Password: $password </p>";
}
elseif ($_SERVER['REQUEST_METHOD']=== 'GET') {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo "<h2>Data from GET Request:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password";
} else {
    echo "INvalid request method.";
}
?>