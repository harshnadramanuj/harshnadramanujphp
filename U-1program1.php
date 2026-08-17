<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$am = 85;
$cn = 78;
$pt = 82;
$ooad = 88;

echo "<h2>" . SEMESTER . "</h2>";
echo "AM Marks: " . $am . "<br>";
echo "CN Marks: " . $cn . "<br>";
echo "PT Marks: " . $pt . "<br>";
echo "OOAD Marks: " . $ooad . "<br>";

$total = $am + $cn + $pt + $ooad;
$percentage = $total / 4;

echo "<br>Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%";
?>
</body>
</html>