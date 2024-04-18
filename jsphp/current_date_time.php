<?php
// Set the default timezone to use. List of supported timezones: https://www.php.net/manual/en/timezones.php
date_default_timezone_set('America/New_York'); // Change this to your timezone

// Display current date in the format of 'Year-Month-Day'
echo "Current Date: " . date("Y-m-d") . "<br>";

// Display current time in the format of 'Hour:Minute:Second'
echo "Current Time: " . date("H:i:s") . "<br>";

// Display current date and time in a more readable format
echo "Current Date and Time: " . date("l, F j, Y, g:i a") . "<br>";

// Display the day of the week
echo "Today is: " . date("l") . "<br>";

// Display the day of the year (1 through 365/366)
echo "Day of the year: " . date("z") . "<br>";
?>
