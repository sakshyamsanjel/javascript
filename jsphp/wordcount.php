<?php
// Specify the name of the file to read
$filename = "example.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $fileContent = file_get_contents($filename);

    // Count the number of words in the file
    $wordCount = str_word_count($fileContent);

    // Display the word count
    echo "The file '$filename' contains $wordCount words.";
} else {
    echo "The file '$filename' does not exist.";
}
?>
