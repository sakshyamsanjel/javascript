<?php

function generateRandomPassword($length = 10) {
    // Possible password characters
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_-=+;:,.?';

    // Combine all possible characters
    $possibleChars = $lowercaseLetters . $uppercaseLetters . $numbers . $specialChars;

    // Initialize password variable
    $password = '';

    // Get the index of the last character in our $possibleChars string
    $max = strlen($possibleChars) - 1;

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Get a random character from $possibleChars and append it to $password
        $randomChar = $possibleChars[random_int(0, $max)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate a random password of specified length
$passwordLength = 12; // Specify the desired length
$randomPassword = generateRandomPassword($passwordLength);

echo "Generated Password: " . $randomPassword;
?>
