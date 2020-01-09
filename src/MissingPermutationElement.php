<?php

namespace App;

class MissingPermutationElement
{

    public static function find($arr): int
    {
        $numOfElements = count($arr);
        $expectedSum = (($numOfElements + 1) * ($numOfElements + 2)) / 2;
        $currentSum = array_sum($arr);

        return $expectedSum - $currentSum;
    }
}