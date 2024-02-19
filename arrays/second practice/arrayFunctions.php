<?php
$names = ['abdessamad', 'mohamed', 'karim',];
$countries = ['morroco', 'usa', 'china'];

// array_filter()

$newNames = array_filter($names, function ($namesCount) {
    return strlen($namesCount) > 5;
});
echo '<pre>';
print_r($newNames);
echo '</pre>';

// array_map()

$capNames = array_map(function ($name) {
    return ucfirst($name);
}, $names);

echo '<pre>';
print_r($capNames);
echo '</pre>';

// array_merge

$users = array_merge($names, $countries);
echo '<pre>';
print_r($users);
echo '</pre>';

