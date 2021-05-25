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

        $leastRange = range(1, count($positives));

        $missingRange = array_diff($leastRange, $positives);

        return count($missingRange) === 0 ? count($positives) + 1 : min($missingRange);
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

        for ($minVal = 1; $minVal < $length + 1; $minVal++) {

            if ($filtered[$minVal - 1] > $minVal) {

                break;
            }
        }

        return $minVal;
    }

    private function positives($arr): array
    {
        return array_filter($arr, function ($var) {
            return $var > 0;
        });
    }
}
