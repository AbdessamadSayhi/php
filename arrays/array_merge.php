<?php

$arr1 = ['a', 'b', 'c'];
$arr2 = ['d', 'e', 'f'];
$arr3 = ['g', 'h', 'i'];

$arr4 = array_merge($arr1, $arr2, $arr3);

echo "<pre>";
print_r($arr4);
echo "</pre>";
// result of $arr4:
/* Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
    [5] => f
    [6] => g
    [7] => h
    [8] => i
) */