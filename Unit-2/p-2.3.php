<?php
echo "<pre>"; // Makes the output clean and easy to read in the browser

// --- USER INPUT SORTING ---
// Let's assume the user entered this unsorted array
$userInput = ["Banana", "Apple", "Orange", "Grapes"];
sort($userInput); // Sorts the array alphabetically (Apple, Banana, Grapes, Orange)
echo "<b>Sorted User Input:</b>\n";
print_r($userInput);
echo "----------------------------------------\n";


// 1) array_change_key_case()
$user = ["name" => "Alex", "role" => "Dev"];
print_r(array_change_key_case($user, CASE_UPPER));

// 2) array_chunk() - Using months
$months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun"];
print_r(array_chunk($months, 2));

// 3) array_count_values()
$fruits = ["Apple", "Orange", "Apple", "Banana", "Apple"];
print_r(array_count_values($fruits));

// 4) array_combine()
$keys = ["id", "status"];
$values = [101, "Active"];
print_r(array_combine($keys, $values));


// --- Setup a simple array for the next 4 functions ---
$stack = [10, 20, 30];

// 5) array_pop() - Removes from the end (Removes 30)
array_pop($stack);
print_r($stack);

// 6) array_push() - Adds to the end (Adds 40)
array_push($stack, 40);
print_r($stack);

// 7) array_unshift() - Adds to the front (Adds 5)
array_unshift($stack, 5);
print_r($stack);

// 8) array_shift() - Removes from the front (Removes 5)
array_shift($stack);
print_r($stack);
?>