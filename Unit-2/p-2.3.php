<?php

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

$months = [
    "January" => 31, "February" => 28, "March" => 31, "April" => 30,
    "May" => 31, "June" => 30, "July" => 31, "August" => 31,
    "September" => 30, "October" => 31, "November" => 30, "December" => 31
];

$laptops = [
    "Apple" => ["MacBook Air" => 1099, "MacBook Pro" => 2499],
    "Dell" => ["XPS 13" => 999, "Inspiron" => 599]
];


echo "<h3>Days:</h3>" . implode(", ", $days);

echo "<h3>Months & Days:</h3>";
foreach ($months as $month => $daysCount) {
    echo "$month has $daysCount days. <br>";
}

echo "<h3>Laptops:</h3>";
foreach ($laptops as $brand => $models) {
    foreach ($models as $model => $price) {
        echo "$brand $model costs \$$price. <br>";
    }
}
?>