<?php include 'config.php'; 

// Get student data for editing
if(isset($_GET['name'])) {
    $id = $_GET['name'];
    $sql = "SELECT * FROM students WHERE id = '$id'";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
    
    if(!$student) {
        die("Student not found");
    }
} else {
    die("Invalid request");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Student</h2>
        <form action="pp.php" method="post">
            
            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type=" " class="form-control" name="student_name" 
                       value="<?php echo $student['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Roll Number</label>
                <input type=" " class="form-control" name="roll_number" 
                       value="<?php echo $student['password']; ?>" required>
            </div>
          
            <button type="submit" class="btn btn-warning">Update Student</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
