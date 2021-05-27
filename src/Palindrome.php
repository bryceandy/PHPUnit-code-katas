<?php

namespace App;

class Palindrome
{
    public static function check($inputString): bool
    {
        $length = strlen($inputString);
        $leftPart = substr(
            $inputString,
            0,
            ($length - (strlen($inputString) % 2 === 0 ? 0 : 1)) / 2
        );
        $rightPart = substr(
            $inputString,
            strlen($leftPart) + (strlen($inputString) % 2 === 0 ? 0 : 1)
        );

        return $leftPart === strrev($rightPart);
    }
}