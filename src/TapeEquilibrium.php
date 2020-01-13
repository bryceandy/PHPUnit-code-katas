<?php

namespace App;

class TapeEquilibrium
{
    /**
     * Performance is very bad for larger arrays
     * i.e with 10,000 elements, needs a fix
     *
     * @param $arr
     *
     * @return int
     */
    public static function generate($arr): int
    {
        $differences = [];
        $arrLength = count($arr);

        for ($parts = 1; $parts < $arrLength;  $parts++) {

            $difference = 0;

            foreach ($arr as $key => $val){

                if ($key < $parts) {
                    $difference += $val;
                }
                if ($key >= $parts) {
                    $difference -= $val;
                }
            }

            $differences[] = abs($difference);
        }

        return min($differences);
    }

    // Another solution also having performance issues
    public static function solve($arr) {

        $minDiff = 0; $total = 0;
        $arrLength = count($arr);

        foreach ($arr as $val) $total += $val;

        for ($parts = 1; $parts < $arrLength;  $parts++) {

            $leftContent = array_chunk($arr, $parts);
            $leftSum = array_sum($leftContent[0]);

            $rightSum = $total - $leftSum;

            if ($parts > 1 && $minDiff < abs($leftSum - $rightSum)) {
                continue;
            }
            else {
                $minDiff = abs($leftSum - $rightSum);
            }
        }

        return $minDiff;
    }
}