<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "UPDATE `name_practice` SET `name`='$name',`password`='$password' WHERE name='$name'"

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?message=Student updated successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>