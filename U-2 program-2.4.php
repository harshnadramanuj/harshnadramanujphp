<?php
// Set the content type to plain text so line breaks (\n) render correctly in the browser
header('Content-Type: text/plain');

echo "=== PHP String Functions Demonstration ===\n\n";

// 1. Initial string to work with
$phrase = "Hello World! Welcome to the PHP programming world.";
echo "Original String: \"$phrase\"\n";
echo "--------------------------------------------------\n\n";

// 1) strlen() - Returns the length of a string
$length = strlen($phrase);
echo "1) strlen() -> Total characters in the string: " . $length . "\n\n";

// 2) strpos() - Finds the position of the first occurrence of a substring (0-indexed)
$searchWord = "Welcome";
$position = strpos($phrase, $searchWord);
echo "2) strpos() -> The word \"$searchWord\" starts at position: " . $position . "\n\n";

// 3) str_word_count() - Counts the number of words in a string
$wordCount = str_word_count($phrase);
echo "3) str_word_count() -> Number of words: " . $wordCount . "\n\n";

// 4) strrev() - Reverses a string
$reversed = strrev($phrase);
echo "4) strrev() -> Reversed string:\n   " . $reversed . "\n\n";

// 5) str_replace() - Replaces some characters with other characters in a string
// Replacing "world" (case-sensitive) with "universe"
$replaced = str_replace("world", "universe", $phrase);
echo "5) str_replace() -> After replacing 'world' with 'universe':\n   " . $replaced . "\n\n";

// 6) strtolower() - Converts a string to lowercase
$lowercase = strtolower($phrase);
echo "6) strtolower() -> All lowercase:\n   " . $lowercase . "\n\n";

// 7) strtoupper() - Converts a string to uppercase
$uppercase = strtoupper($phrase);
echo "7) strtoupper() -> All uppercase:\n   " . $uppercase . "\n\n";

echo "==========================================";
?>