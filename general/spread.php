<?php

/*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS
  */

function calculate(...$nums)
{
    /*     echo "Number Of Arguments: " . func_num_args() . "<br>"; //func_num_args() retrun number of arguments.
    echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>"; // func_get_arg(3) return the value of given index.
    print_r(func_get_args()); // func_get_args() if no parameter is passed it return all the array of arguments.
    $result = 0;
    foreach (func_get_args() as $arg) :
        $result += $arg;
    endforeach;
    echo "<br>";
    echo "Total is : " . $result; */

    // Nice Way
    echo "Number Of Arguments: " . count($nums);
    echo "<br />";
    echo "Argument Index Number 3 Is " . $nums[3];
    echo "<br />";
    echo "\$nums type is an " . gettype($nums); // $nums is an array
    echo "<br />";
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    echo "<br />";
    $result = 0;
    foreach ($nums as $num) :
        $result += $num;
    endforeach;
    echo "Total is : " . $result;
}

calculate(10, 20, 50, 30, 40, 50, 100);
