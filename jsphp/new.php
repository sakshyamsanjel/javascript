<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakshyam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
    $Person_id=$_POST['person_id'];
    $Username=$_POST['username'];
    $Name=$_POST['name'];
    $Location=$_POST['location'];
    $Contact=$_POST['contact'];
    $Password=$_POST['password'];
        $sql="INSERT INTO person_table(Person_id,Username,Name,Location,Contact,Password)values('$Person_id','$Username','$Name','$Location','$Contact','$Password')";
    if ($conn->query($sql) === TRUE)
    {
      echo "Registration successful!";
      header("Location: login.php");
    } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>