<?php

namespace App;

class MissingMinimumPositive
{
    // Solution 1, 100% performance and correctness
    public function solve($A): int
    {
        $positives = $this->positives($A);

        if (count($positives) === 0) {
            return 1;
        }

        $least_range = range(1, count($positives));

        $missing_range = array_diff($least_range, $positives);

        return count($missing_range) === 0
            ? count($positives) + 1
            : min($missing_range);
    }

    // Solution 2, 100% correctness, 75% in performance
    public function solve2($A): int
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

    private function positives($arr): array
    {
        return array_filter($arr, function ($var) {
            return $var > 0;
        });
    }
}
