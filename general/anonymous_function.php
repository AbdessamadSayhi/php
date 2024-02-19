<?php

/*
    Functions in PHP
    - Normal Functions
    - Anonymous Functions (Closures)
        - An anonymous function is a function that is defined without a name.
        - Sometimes, we may need a function for a specific task without giving it a name. This is where anonymous functions come into play. They allow us to define a function on-the-fly without the need to give it a name.

    - Inheriting Variables from the Parent Scope
        - Anonymous functions can inherit variables from the parent scope using the `use` keyword. This allows the anonymous function to access variables defined outside its scope.

    - Passing Anonymous Functions to Other Functions
        - Anonymous functions can be passed as arguments to other functions. This is useful when we need to define a callback function for operations like array manipulation, sorting, filtering, etc.

    - Returning Anonymous Functions from Functions
        - Just like any other variable, anonymous functions can also be returned from other functions. This can be useful for creating more dynamic and flexible code structures.

    - Closures
        - A closure is a special type of anonymous function that can capture variables from its parent scope. When a closure is defined, it retains access to variables defined outside its scope, even after the parent function has finished executing.

*/

// Normal Function With Parameters
function say_hello_to($someone)
{
    return "Hello $someone";
}

echo say_hello_to("Osama");

echo '<br>#########<br>';

// Anonymous Function Assigned to a Variable
$say_hello = function () {
    return "Hello";
};

echo $say_hello();

echo '<br>#########<br>';

// Anonymous Function With Parameters Assigned to a Variable
$say_hola = function ($someone) {
    return "Hola $someone";
};

echo $say_hola("Osama");

echo '<br>#########<br>';

// Inheriting Variables from the Parent Scope
$msg = "Hi";

$say_hi = function ($someone) use ($msg) {
    return "$msg $someone";
};

echo $say_hi("Osama");

echo '<br>#########<br>';

// Passing Anonymous Functions to Other Functions (e.g., array_map)
$nums = [10, 20, 30, 40, 50];

// Using a Named Function
function add_five($item)
{
    return $item + 5;
}

$nums_after_adding_five = array_map("add_five", $nums);

echo '<pre>';
print_r($nums_after_adding_five);
echo '</pre>';

// Using an Anonymous Function
$nums_after_adding_ten = array_map(function ($item) {
    return $item + 10;
}, $nums);

echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';
