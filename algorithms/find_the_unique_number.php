<?php

function find_uniq($a)
{
    $count = [];

    foreach ($a as $element) {
        $key = serialize($element); // Use serialization to capture both value and type
        if (!isset($count[$key])) {
            $count[$key] = 1;
        } else {
            $count[$key]++;
        }
    }
    foreach ($count as $key => $occurrences) {
        if ($occurrences === 1) {
            // Unserialize to get the original value and type
            $uniqueElement = unserialize($key);
            return $uniqueElement;
        }
    }

    return null; // No unique element found (optional handling based on your use case)
}

// Example usage:
$a = [0, 0, 0.55, 0, 0];
$result = find_uniq($a);

// Output the result with its type
echo "The unique element is: ";
var_dump($result);
