<?php
/*
    Filter Functions

    - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
*/
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// fliter function using anonymous function
// IF WE PASS " ARRAY_FILTER_USE_KEY " AS 3RD ARG WILL USE THE KEYS OF $ARR AS $VALUE IN THE FUNCTION.
// If we pass " ARRAY_FILTER_USE_BOTH " will be able to use the keys and values of $arr in the function.
$arr2 = array_filter($arr, function ($value) {
    return $value % 2 == 0; // will return only even numbers
});

echo "<pre>";
print_r($arr2);
echo "</pre>";

// fliter function using arrow function
$arr2 = array_filter($arr, fn ($value) =>  $value % 2 == 0);
echo "<pre>";
print_r($arr2);
echo "</pre>";
