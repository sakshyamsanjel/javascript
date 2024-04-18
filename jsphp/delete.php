<?php
include 'connection.php';

if(isset($_GET['person_id'])) {
    $id = $_GET ['person_id'];
    $query = "DELETE  FROM person_table WHERE person_id =  '$id'   ";
    $result = mysqli_query ($connection, $query);


    if($result) {
        echo "User record deleted successfully";
        // header("Location: data.php");
    } else {
        echo "Error deleting User record:";
    }
} else {
    echo "Invalid User ID:";
    exit;
}

mysqli_close($connection);
?>