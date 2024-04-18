<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
    // Initialize an array to store error messages
    $errors = [];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    
    // Validate password using regex
    // Example: Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, and one number
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
        $errors[] = "Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, and one number.";
    }
    
    // Check if there were any errors
    if (empty($errors)) {
        echo "Thank you for registering!";
        // Here, you might want to further process the validated data, like storing it in a database
    } else {
        // Display error messages
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
