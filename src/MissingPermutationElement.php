<?php

namespace App;

class MissingPermutationElement
{

    public static function find($arr): int
    {
        // We may use the formula for the sum of N numbers to find the missing element N ( N + 1) /2
        // And subtract the available sum of elements
        return - array_sum($arr) + ((count($arr) + 1) * (count($arr) + 2)) / 2;
    }
}