<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Student Management System</h2>
        
        <?php if(isset($_GET['message'])): ?>
            <div class="alert alert-success"><?php echo $_GET['message']; ?></div>
        <?php endif; ?>

        <a href="create.php" class="btn btn-primary mb-3">Add New Student</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `name_practice` ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['name']}</td>
                                <td>{$row['password']}</td>
                                <td><a href='update.php?name={$row['name']}' class='btn btn-warning btn-sm'>Edit</a></td>
                                <td><a href='delete.php?name={$row['name']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class=' -center'>No students found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php $conn->close(); ?>