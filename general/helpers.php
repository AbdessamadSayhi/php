<?php
function print_array($arr)
{
    if (is_array($arr)) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    } else echo 'NOT AN ARRAY';
}
