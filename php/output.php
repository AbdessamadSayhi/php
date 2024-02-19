<?php
include 'heading.html';

$myarr = [];
$myarr = ['abdessamad' => 10, 'Sayhi' => 11];

function sum(...$nums)
{
    echo 'array_sum :', array_sum($nums);
    $total = 0;
    foreach ($nums as $num) {
        $total += $num;
    }
    echo $total;
}

sum(10, 15, 5);
echo '</br>';
echo time();
