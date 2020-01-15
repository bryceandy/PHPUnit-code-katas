<?php

namespace App;

class MinimumTurns
{
    /**
     * No performance checks required
     *
     * @param $A
     *
     * @return mixed
     */
    public function evaluate($A)
    {
        $length = count($A);

        $expected1 = array_fill(0, $length, 1);

        for ($index = 1; $index < $length; $index += 2) {
            $expected1[$index] = 0;
        }

        $diff1 = array_diff_assoc($expected1, $A);

        $expected2 = array_fill(0, $length, 0);

        for ($index = 1; $index < $length; $index += 2) {
            $expected2[$index] = 1;
        }

        $diff2 = array_diff_assoc($expected2, $A);

        $turns = [count($diff1), count($diff2)];
        return min($turns);
    }
}