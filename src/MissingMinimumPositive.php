<?php

namespace App;

class MissingMinimumPositive
{

    public function solve($A) {

        $positives = array_filter($A, "is_positive");

        if (count($positives) === 0) {
            return 1;
        }

        $filtered = array_unique($positives);

        sort($filtered);

        $min_val = $filtered[0];

        foreach ($filtered as $val) {

            if ($val > $min_val) {

                break;
            }
            else {
                $min_val += 1;
            }
        }

        return $min_val;
    }

    function is_positive($var)
    {
        return $var > 0;
    }
}