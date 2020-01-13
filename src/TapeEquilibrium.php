<?php

namespace App;

class TapeEquilibrium
{
    /**
     * Performance is very bad for larger arrays
     * i.e with 10,000 elements, needs a fix
     *
     * @param $arr
     *
     * @return int
     */
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