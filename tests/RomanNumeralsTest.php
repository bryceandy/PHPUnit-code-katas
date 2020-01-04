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
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [12, 'XII'],
            [15, 'XV'],
            [17, 'XVII'],
            [19, 'XIX'],
            [20, 'XX'],
            [24, 'XXIV'],
            [29, 'XXIX'],
        ];
    }
}
