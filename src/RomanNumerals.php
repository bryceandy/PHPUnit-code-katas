<?php

namespace App;

class RomanNumerals
{
    public static function generate($number): string
    {
        $romanNum = '';

        while ($number > 4) {

            $romanNum .= 'V';

            $number -= 5;
        }

        while ($number > 3) {

            $romanNum .= 'IV';

            $number -= 4;
        }

        while ($number > 0) {

            $romanNum .= 'I';

            $number--;
        }

        return $romanNum;
    }
}
