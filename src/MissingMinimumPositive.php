<?php

namespace App;

class MissingMinimumPositive
{
    /**
     * Solution 1, 100% performance and correctness
     *
     * @param $A
     *
     * @return int|mixed
     */
    public function solve($A)
    {
        $positives = $this->positives($A);

        if (count($positives) === 0) {
            return 1;
        }

        $least_range = range(1, count($positives));
        $missing_range = array_diff($least_range, $positives);

        if (count($missing_range) === 0) {
            return count($positives) + 1;
        }
        return min($missing_range);
    }

    // Solution 2, 100% correctness, 75% in performance
    public function solve2($A)
    {
        $positives = $this->positives($A);

        if (count($positives) === 0) {
            return 1;
        }

        $filtered = array_unique($positives);

        sort($filtered);

        $length = count($filtered);

        for ($min_val = 1; $min_val < $length + 1; $min_val++) {

            if ($filtered[$min_val - 1] > $min_val) {

                break;
            }
        }

        return $min_val;
    }

    /**
     * @param $arr
     *
     * @return array
     */
    private function positives($arr)
    {
        return array_filter($arr, function ($var) {
            return $var > 0;
        });
    }
}
