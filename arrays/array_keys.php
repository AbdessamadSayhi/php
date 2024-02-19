<?php
/*  --- array_keys() ---
    first arg [REQUIRED]: array $array — An array containing keys to return.
    second arg [OPTIONAL]: array $array — An array containing keys to return.
loose compression
*/
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4,];

// get all the keys of $arr
$keys = array_keys($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

$value = 4;
// will return the key of the $value (will return many keys if $value exsists many time within $arr).
$keys = array_keys($arr, $value);