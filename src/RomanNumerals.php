<?php

namespace App;

class RomanNumerals
{
    public const NUMERALS = [
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    public static function generate($number): string
    {
        $romanNum = '';

        foreach (self::NUMERALS as $numeral => $arabic) {
            while ($number >= $arabic) {
                $romanNum .= $numeral;

                $number -= $arabic;
            }
        }

        return $romanNum;
    }
}
