<?php
echo "Hi";
echo "<br>";
$str = "abdessamad";
echo strlen($str); // return length of string
echo "<br>";
$str_to_array = str_split($str); // will return the given string as array
print_r($str_to_array);
echo "<br>";
ucfirst($str); // Upper Case First Letter but original string stay unmodified
lcfirst($str); // Lower Case First Letter but original string stay unmodified
strtolower("ABDESSAMAD"); // will return the string as lower case
strtoupper("abdessamad"); // will return the string as upper case
ucwords("abdessamad sayhi"); // will upper case the first letter of every word.
ucwords("my name is |abdessamad |sayhi", "|"); // adding delimeter will explicitly tell where words beggin to uppercase the first letter of those words.
str_repeat("Hi", 5); // will repat the sting 5 times.
echo "**************<br>";
$friends = ['Mohammed', "Ayman", "Ahmad"];
echo implode("-", $friends); // will return a string containing all values from $frined array separated with "-".
gettype(implode("-", $friends)); // string.
echo "<br>";
$sentence = "I am learing PHP";
echo "<pre>";
print_r(explode(" ", $sentence)); // will return an array of words separated by " ". each word in a case.
echo "</pre>";
echo "**************<br>";
$username = "abdou geek 44!";
echo trim($username, "!"); // will remove exra spaces + the given argument "!" from the sides only.
echo ltrim($username, "!"); // will remove exra spaces + the given argument "!" from the left side only.
echo rtrim($username, "!"); // will remove exra spaces + the given argument "!" from the right side only.
echo "<br>";
echo "**************<br>";
/*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

echo chunk_split("Elzero Web School", 3, "@");
echo '<br>';

echo '<pre>';
print_r(str_split("Elzero")); // will split the string into letters and each letter into an array element.
echo '</pre>';

echo '<pre>';
print_r(str_split("Elzero", 2)); // will split the string into 2 letters and each 2 letters into an array element.
echo '</pre>';

strip_tags("<h3>Hello <b>Elzero</b></h3>"); // will ignore all tags.

strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3>, <b>"); // will ignore all tags except <h3> and <b>

nl2br("Elzero\nWeb\nSchool", false); // true by default uses xhtml self-enclosing tags
echo "**************<br>";
/*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

var_dump(strpos("Hello Hello", "H")); // 0
echo '<br>';
var_dump(strpos("Hello Hello", "H", 6)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", "h")); // False
echo '<br>';
var_dump(strpos("Hello Hello", "H", -2)); // False
echo '<br>';
var_dump(strrpos("Hello Hello", "H")); // 6 last occurence
echo '<br>';
var_dump(stripos("Hello Hello", "h")); // 0 case insensitive
echo '<br>';
var_dump(strripos("Hello Hello", "h")); // 6 last occurence + case insensitive
echo '<br>';
var_dump(substr_count("Hello Hello", "He")); // 2
