<?php
// we give a value and will return the key if exsits.
// will returl false if not exsits.
$arr1 = ['a' => 5, 'b' => 0.99, 'c' => 100, 'd' => 'abdessamad'];
$searchedValue = array_search(5, $arr1);
if ($searchedValue == false) echo "value not found!";
else echo "found :" . $searchedValue;
echo "</br>";
// pay attention for non indexted array EXAMPLE
$arr2 = [1, 2, 3, 4, 5];
$searchedValue = array_search(1, $arr2);

// here even the value 1 exists will print "value not found"because array_searsh
if ($searchedValue == false) echo "value not found!";
else echo "value found :" . $searchedValue;

// in_array() function return true if the needle(value) exists in the given array and false if otherwise.
echo '</br>';
if (in_array('abdessamad', $arr1)) echo 'found';
