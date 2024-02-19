<?php
function reverse_integer_parsing($n)
{
    // Convert the integer to a string
    $strN = strval($n);

    // Reverse the string
    $reversedStr = strrev($strN);

    // Convert the reversed string back to an integer
    $reversedInt = intval($reversedStr);

    return $reversedInt;
}

// Test the function with 120
$result = reverse_integer_parsing(120);
echo "Result: $result";

function reverse_integer($n)
{
    $reverse = 0;

    while ($n > 0) {
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        $n = (int)($n / 10);

        // Let's print the values after each line
        echo "\$n: $n, \$reverse: $reverse\n";
    }

    return $reverse;
}

// Test the function with 120
$result = reverse_integer(120);
echo "Result: $result";
