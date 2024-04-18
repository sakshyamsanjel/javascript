<?php
include 'connection.php';
$query = "SELECT * FROM person_table";
$result = mysqli_query($connection, $query);
?>

<html>
<head>
    <title>Person</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th> ID</th>
                <th> Name</th>
                <th>Location</th>
                <th>Contact</th>
            </tr>
        </thead>
        <h1>Person</h1>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['person_id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>
                        <a href='edit.php?person_id=" . $row['person_id'] . "'>Edit</a>
                        <a href='delete.php?person_id=" . $row['person_id'] . "'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data found</td></tr>";
            }
            mysqli_close($connection);
            ?>
        </tbody>
    </table>
</body>
</html>