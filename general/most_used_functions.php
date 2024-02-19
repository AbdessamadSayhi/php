<?php
echo "<h1>My most used functions and it's implementations</h1>";
echo "<b>implode()</b><br>";
echo nl2br("The implode() function takes an array of strings and concatenates them into a single string, using a specified delimiter.");

$myArray = array("apple", "banana", "cherry");
$stringResult = implode(", ", $myArray);
echo "<pre>";
print_r($myArray);
echo "</pre>";
echo "After implode() function: " . $stringResult;

echo "<br>";
echo "<br><b>explode()</b><br>";
echo "<br>";

echo nl2br("The explode function in PHP is used to split a string into an array of substrings based on a specified delimiter.
It takes two main parameters:");
echo "<br>";
echo "<br>";

$string = "apple,orange,banana,grape";
$delimiter = ",";
$array = explode($delimiter, $string);
echo "Normal string: " . $string;

echo "<br>";
echo "<br>";

echo "Converted to array: ";
echo "<pre>";
print_r($array);
echo "</pre>";
