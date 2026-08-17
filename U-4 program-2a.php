<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $conn = new mysqli("localhost:3307", "root", "", "studentdb");
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE TABLE IF NOT EXISTS students3
        (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50),
            email VARCHAR(50)
        )";
        if($conn->query($sql) === TRUE){
            echo "Table Created Successfully.";
        }
        else{
            echo "Error: " . $conn->error;
        }
        $conn->close();
    ?>
</body>
</html>

