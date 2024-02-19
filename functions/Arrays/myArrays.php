<?php

namespace Functions\Arrays;

class myArrays
{
    public function __construct()
    {
    }
    function my_array_key_exists(int|string $key, array $array): bool
    {
        foreach ($array as $array_key => $array_value) {
            if ($key == $array_key) {
                return true;
            }
        }
        return false;
    }

    function my_array_count_values(array $array): array
    {
        $newCounting = [];
        foreach ($array as $value) {
            if (self::my_array_key_exists($value, $newCounting)) {
                $newCounting[$value]++;
            } else {
                $newCounting[$value] = 1;
            }
        }
        return $newCounting;
    }
}
