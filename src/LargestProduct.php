<?php

namespace App;

class LargestProduct
{
    public static function find($array): int
    {
        $length = count($array);
        $products = [];

        for($i = 0; $i < $length - 1; $i++)
        {
            $products[] = $array[$i] * $array[$i + 1];
        }

        return max($products);
    }
}