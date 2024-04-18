<?php
// Check if the 'user_name' cookie is set
if(isset($_COOKIE['user_name'])) {
    // Cookie is set; display a personalized greeting
    echo "Welcome back, " . htmlspecialchars($_COOKIE['user_name']) . "!";
} else {
    // Cookie is not set; set a new cookie with the user's name
    $user_name = "John Doe"; // This could be dynamically assigned, e.g., from a form submission
    setcookie('user_name', $user_name, time() + (86400 * 30), "/"); // 86400 = 1 day, cookie expires in 30 days
    echo "Hello, new visitor!";
}
?>
        