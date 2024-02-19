<?php
/* 
--- array_map() ---
--- array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
--- Applies The Callback To The Elements Of The Given Arrays 
--- The array_map() function in PHP is used to apply a callback function to each element of an array 
or multiple arrays. 
--- The callback function is a function that takes one or more arguments and returns a single value. 
--- The array_map() function returns a new array containing the results of applying the callback function 
to each element of the input arrays. 
*/

$numbers = array(1, 2, 3, 4, 5);
$doubledNumbers = array_map(function ($x) { // [using anonymous function]
    return $x * 2;
}, $numbers);

echo "<pre>";
print_r($doubledNumbers); // Contain elements from $numbers Array multiplied by 2.
echo "</pre>";

$numbers = array(1, 2, 3, 4, 5);
$doubledNumbers_arrow = array_map(fn ($x) => $x * 2, $numbers); // [using arrow function]

echo "<pre>";
print_r($doubledNumbers_arrow); // Contain elements from $numbers Array multiplied by 2.
echo "</pre>";

// ------------- another situation ----------------------

$stringNumbers = array("1", "2", "3", "4", "5");
// Using array_map to convert each string to an integer
$intNumbers = array_map('intval', $stringNumbers);
// Result: $intNumbers is now [1, 2, 3, 4, 5]

// ------------- another situation ----------------------

$arr1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4,];
$arr2 = ['e' => 5, 'f' => 6, 'g' => 7, 'h' => 8,];


/* $arr3 = array_map(function ($val1, $val2) {
    return $val1 * $val2;
}, $arr1, $arr2); */

$arr3 = array_map(fn ($val1, $val2) => $val1 * $val2, $arr1, $arr2);

echo "<pre>";
print_r($arr3);
echo "</pre>";
