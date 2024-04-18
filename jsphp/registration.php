<!DOCTYPE html>
<html>
<head>
    <title> Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <form method="POST" action="">
            <p id="heading">Registration Form</p>
            <div class="field">
                <input autocomplete="off" placeholder=" Name" class="input-field" type="Name" name="name">
            </div>

            <div class="field">
                <input autocomplete="off" placeholder="Username" class="input-field" type="text" name="username" required>
            </div>
    
               <div class="field">
                <input autocomplete="off" placeholder="Location" class="input-field" type="Name" name="location" required>
            </div>

            <div class="field">
                <input autocomplete="off" placeholder="Contact" class="input-field" type="Name" name="contact" required>
            </div>

            <div class="field">
                <input autocomplete="off" placeholder="Password" class="input-field" type="password" name="password" required>
            </div>
            <div class="btn">
                <button type="submit" class="button1" name="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include 'connection.php';
if (!$connection) {
    echo "No connection with database";
} else {
    if(isset ($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $location = $_POST['location'];
        $contact = $_POST['contact'];

   

        $query = "INSERT INTO person_table (name ,username, contact , location, password) VALUES('$name','$username','$contact','$location','$password')";

        $res = mysqli_query ($connection, $query);
        echo $res;
        if ($res) {
            echo "Data inserted";
            header("Location: login.php");
        } else {
            echo "Error in data insert";
        }
    }
}
?>