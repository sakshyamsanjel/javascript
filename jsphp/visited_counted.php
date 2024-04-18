<?php
// Start or resume a session
session_start();

// Check if the 'visit_count' session variable is set
if(isset($_SESSION['visit_count'])) {
    // Session variable exists, increment its value
    $_SESSION['visit_count'] += 1;
} else {
    // Session variable doesn't exist, initialize it to 1
    $_SESSION['visit_count'] = 1;
}

// Display the number of visits
echo "You have visited this page " . $_SESSION['visit_count'] . " time(s).";
?>
