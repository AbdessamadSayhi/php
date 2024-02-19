<?php
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$arr3 = array_combine($arr1, $arr2, true);
//arr1 > keys
//arr2 > value
echo "<pre>";
print_r($arr3);
echo "</pre>";
