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

        $min_val = 1;

        foreach ($filtered as $val) {

            if ($val > $min_val) {

                break;
            }
            else {
                $min_val ++;
            }
        }

        return $min_val;
    }
}
