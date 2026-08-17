<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307","root","","test");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $queries = [
           "select hour(now()) as hour",
           "select minute(now()) as minute",
           "select second(now()) as second",
           "select date_format(now()) , '%d-%m-%y-%h:%i:%s') as formatted_date",
           "select date_sub(curdate(),interval 10 day) as date_subtract",
           "select date_add(curdate(),interval 10 day) as date_add"
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
    ?>
</body>
</html>