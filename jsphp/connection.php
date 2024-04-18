<?php
$connection = mysqli_connect("localhost","root","","sakshyam");
if(mysqli_connect_errno()){
    echo"Failed to connect to MySQL:" . mysqli_connect_error();
    exit();
}else{
echo"connection established";
}
?>