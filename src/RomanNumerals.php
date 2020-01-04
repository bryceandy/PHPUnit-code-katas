<?php

namespace App;

class RomanNumerals
{
    public static function generate($number): string
    {
        $romanNum = '';

        for ($count = 1; $count <= $number; $count++) {

            $romanNum .= 'I';
        }

        return $romanNum;
    }
}
