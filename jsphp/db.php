<?php
require_once 'db.php'; // Include the database connection file

// Use the function from the included file to get the database connection
$connection = getDBConnection();

// Now, you can use $connection to interact with the database
// For example, to perform a query:
try {
    $statement = $connection->prepare("SELECT * FROM some_table");
    $statement->execute();

    // Fetch the results
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
        // Process each row
        print_r($row);
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
