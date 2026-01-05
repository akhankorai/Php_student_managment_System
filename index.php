
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="enter name">
        <input type="text" placeholder="enter password" name=password>
        <br>
       
        <label for="password">enter password</label>
        <button type='submit'>click me </button>
    </form>
</body>
</html>