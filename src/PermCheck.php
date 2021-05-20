<?php

namespace App;

class PermCheck
{
    public function evaluate($A): int
    {
        $trimmed_array = array_unique($A);
        $largest_element = max($trimmed_array);
        $current_sum = array_sum($trimmed_array);
        $length = count($A);
        $expected_sum = $length * ($length + 1) / 2;

        if ($length === $largest_element && $current_sum === $expected_sum) {
            return 1;
        }

        return 0;
    }
}