<?php

namespace App;

class TapeEquilibrium
{
    // Performance is far from good, needs a fix
    public static function generate($arr): int
    {
        $differences = [];
        $arrLength = count($arr);

        for ($parts = 1; $parts < $arrLength;  $parts++) {

            $difference = 0;

            foreach ($arr as $key => $val){

                if ($key < $parts) {
                    $difference += $val;
                }
                if ($key >= $parts) {
                    $difference -= $val;
                }
            }

            $differences[] = abs($difference);
        }

        return min($differences);
    }
}