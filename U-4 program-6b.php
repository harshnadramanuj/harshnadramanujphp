!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new PDO("mysql:host=localhost,dbname=studentdb","root", "");
        $sql = "DELETE FROM student3 WHERE id =1";
        $conn->exec($sql);
        echo "record deleted successfully.";
        ?>
</body>
</html>