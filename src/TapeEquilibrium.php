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

            for ($aIndex = 0; $aIndex < $parts; $aIndex++) {
                $difference += $arr[$aIndex];
            }

            for ($p = $parts; $p < $arrLength;  $p++) {
                $difference -= $arr[$p];
            }

            $differences[] = abs($difference);
        }

        return min($differences);
    }
}