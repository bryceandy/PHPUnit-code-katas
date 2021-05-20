<?php

namespace App;

class TapeEquilibrium
{
    // Solution 1, Best performance. O(N)
    public static function solution($arr): int
    {
        $length = count($arr);

        if ($length === 2) return abs($arr[0] - $arr[1]);

        // P=1, |A[0] - (A[1] + A[2] + ... + A[N-1])|
        // P=2, |(A[0] + A[1]) - (A[2] + A[3] + ... + A[N-1])|
        // P=3, |(A[0] + A[1] + A[2]) - (A[3] + A[4] + ... + A[N-1])|
        // P=4, |(A[0] + A[1] + A[2] + A[3]) - (A[4] + A[5] + ... + A[N-1])|
        // ...

        $head = $arr[0];
        $tail = array_sum($arr) - $head;
        $minDiff = abs($head - $tail);

        for ($parts = 1; $parts < $length - 1;  $parts++) {
            $head += $arr[$parts];
            $tail -= $arr[$parts];

            $currDiff = abs($head - $tail);

            if ($currDiff < $minDiff) {
                $minDiff = $currDiff;
            }
        }

        return $minDiff;
    }

     // Solution 2, performance is poor for larger arrays, i.e with 10,000 elements. O(N^2)
    public static function solution2($arr)
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

    // Another solution having performance issues. O(N^2)
    public static function solution3($arr)
    {
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
