<?php

namespace App;

class RomanNumerals
{
    public const NUMERALS = [
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
