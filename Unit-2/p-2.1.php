<?php
// Set content type to plain text so the output formats nicely in the browser
header('Content-Type: text/plain');

echo "=== 1. Numeric Array (Days of the Week) ===\n";
// Creating a numeric array for Monday to Saturday
$daysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

// Displaying the numeric array
print_r($daysOfWeek);
echo "\n" . str_repeat("-", 40) . "\n\n";


echo "=== 2. Associative Array (Months and Total Days) ===\n";
// Creating an associative array with months as keys and total days as values
$monthsAndDays = array(
    "January"   => 31,
    "February"  => 28, // 29 in a leap year
    "March"     => 31,
    "April"     => 30,
    "May"       => 31,
    "June"      => 30,
    "July"      => 31,
    "August"    => 31,
    "September" => 30,
    "October"   => 31,
    "November"  => 30,
    "December"  => 31
);

// Displaying the associative array
print_r($monthsAndDays);
echo "\n" . str_repeat("-", 40) . "\n\n";


echo "=== 3. Multidimensional Array (Laptops by Company) ===\n";
// Creating a multidimensional array for two laptop companies, their models, and prices
$laptops = array(
    "Dell" => array(
        array("model" => "XPS 13", "price" => "$1,200"),
        array("model" => "Inspiron 15", "price" => "$650")
    ),
    "Apple" => array(
        array("model" => "MacBook Air M3", "price" => "$1,099"),
        array("model" => "MacBook Pro 14", "price" => "$1,999")
    )
);

// Displaying the multidimensional array
print_r($laptops);
?>