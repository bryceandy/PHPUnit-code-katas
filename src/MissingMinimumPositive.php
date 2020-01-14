<?php

namespace App;

class MissingMinimumPositive
{

    public function solve($A) {

        $positives = array_filter($A, function ($var) {
            return $var > 0;
        });

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
}
