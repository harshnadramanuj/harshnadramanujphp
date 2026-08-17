<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost:3307","root","","test");
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
        $queries = [
            "select curdate() AS currentdate",
            "select curtime() AS currenttime",
            "select unix_timestamp() AS currenttime",
            "select from_unixtime(unix_timestamp()) AS datetime"
        ];
        foreach($queries as $sql){
            echo "<br>";
            $result = $conn->query($sql);
            if($result)
            {
                while($row = $result->fetch_assoc()){
                    foreach($row as $key => $value){
                        echo "<b>$key:</b> $value <br>";
                    }
                }
            } else {
                echo "Query Error";
            }
        }
    }
    ?>
</body>
</html>