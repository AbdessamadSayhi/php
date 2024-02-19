<?php

var_dump((bool) []);

gettype([]);

gettype(array());

include('hello.php'); // if hello.php dosn't exsist will show a warnning but wil continue executing the code.
include_once('hello.php'); // Same as include() bit will make sure that the include will be executed just 1 time
require('hello.php'); // if hello.php dosn't exsist will show a fatal error and stop the code.
require_once('hello.php'); // Same concept.

str_split("abdessamad"); // return string as array

strtoupper("abdessamad"); // convert string to uppercase letters

ord('A'); //  return ASCII code of the given characters

strlen("Abdessamad"); // get length of string

// To iterate over the characters in 
// the string variable $word = "Hello" 
//you can use a for loop or a foreach loop.
$word = "Hello";
$stringasarray = str_split($word);
//We should use str_split() to convert the string into an array of characters.
foreach ($stringasarray as $letter) {
    echo $letter; // will print each letter of the variable $word or $stringasarray.
}
// Using for loop could be easier in this case:
for ($i = 0; $i < strlen($word); $i++) {
    $char = $word[$i];
    echo $char;
}

header("location: page.php"); //redirecting to page.php

// The intdiv() function discards the remainder and returns 
//only the whole number part of the division result.
$result = intdiv(10, 3);
echo $result;  // Outputs 3
