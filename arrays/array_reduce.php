<?php

/*
    Array Functions : array_reduce.php

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration

  */

function add($carry, $item)
{
  echo "$carry<br>";
  return $carry + $item;
}

$nums = [80, 10, 20, 50, 100, 10];

echo array_reduce($nums, "add", 0);

// --- another situation ---

$invoicesItems = [
  ['product' => 'product1', 'price' => 19.99, 'qty' => 1],
  ['product' => 'product2', 'price' => 190, 'qty' => 3],
  ['product' => 'product3', 'price' => 39.99, 'qty' => 5],
  ['product' => 'product4', 'price' => 7.99, 'qty' => 2]
];
// the 0 at the end is the default value of $sum and it's [OPTIONAL].
$sum = array_reduce($invoicesItems, fn ($sum, $item) => $sum + $item['price'] * $item['qty'], 0);
echo "</br>sum is : $sum";
