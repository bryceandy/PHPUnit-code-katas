<?php

namespace App;

class ConsecutiveIntegersProductInRange
{
    /**
     * Not a good solution yet, 100% correctness 0% performance on large arrays
     *
     * @param $A
     * @param $B
     *
     * @return int
     */
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
}