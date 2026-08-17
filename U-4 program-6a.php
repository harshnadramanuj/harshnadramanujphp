<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost","root","","studentdb");
        if($conn->connect_error){
            die("connection failed");
        }
        $sql ="delete from students3 where id =1";
        if($conn->query($sql)){
            echo"record deleted successfully.";
      
      }
      else{
        echo"error";
    
      }
      $conn->close();
    ?>
</body>
</html>