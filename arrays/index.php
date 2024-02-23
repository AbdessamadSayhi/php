<?php
$arr = [100, 50, 44, 'x' => 30, 200, 200, 'y' => 33];

echo '<pre>';
print_r($arr);
echo '</pre>';


echo 'count($arr): ' . count($arr) . '</br>'; // get the length of this array.
echo 'array_search(50, $arr): ' . array_search(50, $arr) . '</br>';

// will searsh for x in "keys" of $arr array and return 1 if found and 0 otherwise.
echo 'array_key_exists(\'x\', $arr): ' . array_key_exists('x', $arr) . '</br>'; // 1

// check if value exist in the array. *** IMPORTANT ***
echo 'in_array(33, $arr): ' . in_array(33, $arr) . '</br>'; // 1

echo 'array_search(33, $arr): ' . array_search(33, $arr) . '</br>'; // y

echo 'in_array(\'x\', $arr): ' . in_array(200, $arr) . '</br>'; // 1


echo 'max($arr): ' . max($arr) . '</br>'; // get the maximum value of this array.
echo 'min($arr): ' . min($arr) . '</br>'; // get the minimum value of this array.

echo 'array_values($arr): ';
echo '<pre>';
print_r(array_values($arr));
echo '</pre>';

echo 'array_keys($arr): ';
echo '<pre>';
print_r(array_keys($arr));
echo '</pre>';

// Count all the "values" of the array and return them as an Array.
echo 'array_count_values($arr): ';
echo '<pre>';
print_r(array_count_values($arr));
echo '</pre>';


$numbers = [10, 2, 34, 24, 12, 1, 43, 23];

array_sum($numbers); //array_sum() return the sum of all values in the array.

array_product($numbers); //product() return the result of division of all values in the array.
