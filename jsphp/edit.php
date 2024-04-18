<?php
include 'connection.php';
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    if (isset($_GET['person_id'])) {
        $id = $_GET['person_id'];

        $query = "SELECT * FROM person_table WHERE person_id = '$id'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

    }

    if (isset($_POST['submit'])) {
        $Username = $_POST['username'];
        $Name = $_POST['name'];
        $Location = $_POST['location'];
         $Contact = $_POST['contact'];

        $query = "UPDATE person_table SET name = '$Name', username = '$Username', location = '$Location', contact = '$Contact' WHERE person_id = '$id'";
        $res = mysqli_query($connection, $query);

        if ($res) {
            echo "Data Edited Successfully!";
           // header("Location: data.php");
            exit();
        } else {
            echo "Error in data update: " . mysqli_error($connection);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
<div class="container">
    <form method="POST" action="">
        <p id="heading">Update data</p>
        <div class="field">
            <input autocomplete="off" placeholder="Username" class="input-field" type="text" name="username" value="<?php echo isset($row['username']) ? $row['username'] : ''; ?>">
        </div>

        <div class="field">
            <input autocomplete="off" placeholder="Name" class="input-field" type="text" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>">
        </div>

        <div class="field">
            <input autocomplete="off" placeholder="Location" class="input-field" type="text" name="location" value="<?php echo isset($row['location']) ? $row['location'] : ''; ?>">
        </div>

        <div class="field">
            <input autocomplete="off" placeholder="Contact" class="input-field" type="text" name="contact" value="<?php echo isset($row['contact']) ? $row['contact'] : ''; ?>">
        </div>
        <div class="btn">
            <button type="submit" class="button1" name="submit">Update</button>
        </div>
    </form>
</div>
</body>
</html>


