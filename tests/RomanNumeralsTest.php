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
            [10, 'X'],
            [11, 'XI'],
            [12, 'XII'],
            [13, 'XIII'],
            [14, 'XIV'],
            [15, 'XV'],
            [16, 'XVI'],
            [17, 'XVII'],
            [18, 'XVIII'],
            [19, 'XIX'],
            [20, 'XX'],
            [24, 'XXIV'],
            [29, 'XXIX'],
        ];
    }
}
