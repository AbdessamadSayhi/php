<?php

function my_array_count_values($arr) :array
{
    $newarr = [];
    foreach ($arr as $value) {
        if (!array_key_exists($value, $newarr)) { // ila mal9inach value f newarr kanzidouha @var_dump($newarr[$value] == false)
            $newarr[$value] = 1;
        } else {
            $keycpt = $newarr[$value];
            $newarr[$value] = ++$keycpt;
        }
    }
    return $newarr;
}
$arr = [1, 2, 4, 5, 6, 6, 10, 6, 10, 11, 10, 2, 6];
print_r(my_array_count_values($arr));
echo "<pre>";
print_r(array_count_values($arr));
echo "</pre>";
