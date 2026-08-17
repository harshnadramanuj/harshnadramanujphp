<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "", "studentdb");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "INSERT INTO students3 (name, email) 
                VALUES ('harshnad', 'harshnad@gmail.com')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>