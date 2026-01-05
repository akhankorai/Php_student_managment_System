<?php
include 'config.php';

if(isset($_GET['name'])) {
    $id = $_GET['name'];
    
    // Delete student record
    $sql = "DELETE FROM `name_practice` WHERE name = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?message=Student deleted successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: display.php?message=Invalid request");
    exit();
}

$conn->close();
?>