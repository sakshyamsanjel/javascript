<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =$_POST['name'];
    $password = $_POST['password'];

    echo"<h2>Form Details</h2>";
    echo"<p>Name:$name</p>";
    echo "<p>Password:$password</p>";
}
?>