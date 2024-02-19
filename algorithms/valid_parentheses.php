<?php
sort($a);
$cpt = 0;
$cptt = 0;
for ($i = 0; $i < count($a); $i++) {
    $cptt = 0;
    for ($j = $i; $j < count($a); $j++) {
        if (abs($a[$i] - $a[$j]) <= 1) {
            $cptt++;
        }
    }
    if ($cptt >= $cpt) {
        $cpt = $cptt;
    }
}
return $cpt;
