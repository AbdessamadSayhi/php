<?php
include_once('../helpers.php');

$arr1 = ['a' => 32, 'b' => 4, 'c' => 25, 'd' => 66, 'e' => 2];

// printin the normal array

asort($arr1); // sorting by value
print_array($arr1);

ksort($arr1); // sorting by key
print_array($arr1);

$arr1 = ['z' => 32, 'k' => 0, 'c' => 25, 'a' => 66, 'e' => 22];

print_array($arr1);

// sorting with removing keys values and reseting them.
usort($arr1, fn ($a, $b) => $a <=> $b);

print_array($arr1);
