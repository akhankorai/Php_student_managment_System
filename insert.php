<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql="INSERT INTO `name_practice`(`name`, `password`) VALUES ('$name','$password')";
        if ($conn->query($sql) === TRUE) {
        echo "New student record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>