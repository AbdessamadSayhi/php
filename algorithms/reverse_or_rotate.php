<?php
function isExists($haystack, $needle)
{
    // Use strpos to find the position of the needle in the haystack
    $pos = strpos($haystack, $needle);

    // Check if the word was found (pos is not false)
    if ($pos !== false) {
        return true;
    } else {
        return false;
    }
}

function splitDigits($number)
{
    // Convert the number to a string
    $digitsStr = (string) $number;

    // Split the string into an array of characters
    $digitArray = str_split($digitsStr);

    // Convert each character back to an integer
    $digitArray = array_map('intval', $digitArray);

    return $digitArray;
}
function counting($s)
{
    $count = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        $count += $s[$i];
    }
    return $count;
}

function reverse($s, $sz)
{
    $chunk = chunk_split($s, $sz);
    echo "*" . $chunk . "*</br>";
    $chunkarr = str_split($chunk);
    return $chunkarr;
}
function revRot($s)
{
    $ss = str_split($s);
    echo "<br>" . counting($s) . "<br>";
    echo var_dump(isExists($s, counting($s))) . "<br>";
    $s = reverse($s, 6);

    echo "<pre>";
    print_r($s);
    echo "</pre>";

    $s[6] = $s[0];

    echo "<pre>";
    print_r($s);
    echo "</pre>";
}


echo revrot("123456987654");
