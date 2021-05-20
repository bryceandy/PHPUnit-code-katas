<?php

namespace App;

class ConsecutiveIntegersProductInRange
{
    // Solution 1, 100% correctness 0% performance on large arrays
    public function calculate($A, $B): int
    {
        $counter = 0;

        for ($val = $A; $val <= $B; $val++) {

            for ($factor = 1; $factor <= $val; $factor++) {

                if ($factor * ($factor + 1) === $val) {

                    $counter++;
                }
            }
        }

        return $counter;
    }

    // Solution 2, 100% correctness 0% performance on large arrays
    public function calculate2($A, $B): int
    {
        $counter = 0;

        for ($factor = 1; $factor <= $B; $factor++) {

            $product = $factor * ($factor + 1);

            if ($product >= $A && $product <= $B) {

                $counter++;
            }
        }

        return $counter;
    }
}