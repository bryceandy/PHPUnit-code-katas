<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     *
     * @param $number
     * @param $numeral
     */
    public function it_generates_the_roman_numeral($number, $numeral): void
    {
        $this->assertEquals($numeral, RomanNumerals::generate($number));
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function checks(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'XX'],
            [11, 'XXI'],
            [12, 'XXII'],
            [13, 'XXIII'],
            [14, 'XXIV'],
            [15, 'XXV'],
            [16, 'XXVI'],
            [17, 'XXVII'],
            [18, 'XXVIII'],
            [19, 'XXIX'],
        ];
    }
}
