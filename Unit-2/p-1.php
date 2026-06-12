<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $months = array(
             "January"=> 31,
             "February"=> 28,
             "March" => 31,
             "April" =>30,
             "May" => 31,
             "June" =>30,
             "July" => 31,
             "August" =>30,
             "September" => 31,
             "October" => 30,
             "November" =>31,
             "December" =>31
        );

        foreach($months as $number => $name)
        {
            echo $number . " = " . $name . "<br>";
        }
?>
</body>
</html>