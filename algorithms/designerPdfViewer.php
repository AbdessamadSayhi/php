<?php

function designerPdfViewer($h, $word)
{
    $chars = str_split($word);
    $alphabets = range('a', 'z');
    $heights = array();
    foreach ($chars as $i => $v) { // we are using $i as key and $v as values of the array $chars
        $heights[] = $h[array_search($v, $alphabets)];
    }
    return max($heights) * count($heights);
}
