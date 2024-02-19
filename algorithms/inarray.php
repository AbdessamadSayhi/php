<?php
function getCount($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelsCount = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $vowelsCount++;
        }
    }

    return $vowelsCount;
}
$vowels = ['a' . 'e', 'i', 'o', 'u'];
echo getCount("abracadabra");
