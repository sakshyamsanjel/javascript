<?php
// Array of five student names
$studentNames = ["Alice", "Bob", "Charlie", "Diana", "Edward"];

// Add a new name to the array
$studentNames[] = "Frank";

// Sort the names alphabetically
sort($studentNames);

// Display all names using a loop
echo "<h2>Student Names:</h2>";
foreach ($studentNames as $name) {
    echo $name . "<br>";
}
?>
