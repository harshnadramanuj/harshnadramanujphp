<?php
header('Content-Type: text/plain');

echo "=== PHP Dynamic Type Casting Example ===\n\n";

// 1. Initialize a variable as a string
$variable = "42.75 degrees";
echo "Initial state:\n";
echo "Value: " . $variable . "\n";
echo "Type (gettype): " . gettype($variable) . "\n";
echo "----------------------------------------\n";

// 2. Cast to double/float using settype
// settype returns true on success, false on failure
if (settype($variable, "double")) {
    echo "After settype() to 'double':\n";
    echo "Value: " . $variable . " (Notice it chopped off the text!)\n";
    echo "Type (gettype): " . gettype($variable) . "\n";
    echo "----------------------------------------\n";
}

// 3. Cast to integer using settype
if (settype($variable, "integer")) {
    echo "After settype() to 'integer':\n";
    echo "Value: " . $variable . " (Notice the decimals are gone!)\n";
    echo "Type (gettype): " . gettype($variable) . "\n";
    echo "----------------------------------------\n";
}

// 4. Cast to boolean using settype
if (settype($variable, "boolean")) {
    echo "After settype() to 'boolean':\n";
    echo "Value: " . ($variable ? 'true' : 'false') . "\n";
    echo "Type (gettype): " . gettype($variable) . "\n";
    echo "----------------------------------------\n";
}