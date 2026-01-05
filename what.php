<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$pass1=$_POST['password'];
$name2=$_POST['name2'];
$pass2=$_POST['password1'];

$sql="INSERT INTO `anass`(`na1`, `na2`, `na3`, `na4`) VALUES ('$name','$pass1','$name2','$pass2')";
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
    <style>
     <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 20px;
    }

    h1 {
      color: #007BFF;
      text-align: center;
    }

    .product-box {
      border: 1px solid #ccc;
      padding: 15px;
      margin-bottom: 10px;
      background-color: #fff;
    }
    tr{
        border:2px solid red;
            border: 2px solid black;
    }
  </style>

  </style>
</head>
<body>
    <form method="post">
        <input type="text" name="name" id="name" placeholder="enter name">
        <input type="text" placeholder="enter password" name=password>
        <br>
       
        <label for="password">enter password</label>
        <input type="text" name="name2" id="name2" placeholder="password1">
        <input type="text" placeholder="enter password1" name=password1>
        <br>
       
        <label for="password">enter password</label>
        <button type='submit'>click me </button>


    </form>
    <table class="styled-table">
  <thead>
    <tr>
      <th>Product</th>
      <th>Price</th>
      <th>Stock</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Shampoo</td>
      <td>$5</td>
      <td>In Stock</td>
    </tr>
    <tr>
      <td>Soap</td>
      <td>$2</td>
      <td>Out of Stock</td>
    </tr>
  </tbody>
</table>

<div>
    <ol>
        <li>
            df
        </li>
        <li>
            dff
        </li>
    </ol>
</div>
  
</body>
</html>