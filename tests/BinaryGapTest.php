<?php

use App\BinaryGap;
use PHPUnit\Framework\TestCase;

class BinaryGapTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     *
     * @param $number
     * @param $expected
     */
    public function it_counts_the_binary_gap_of_a_given_decimal($number, $expected): void
    {
        $binaryGap = new BinaryGap();
        $this->assertEquals($expected, $binaryGap->findGap($number));
    }

    /**
     * @return array
     */
    public function checks(): array
    {
        return [
            [1041, 5],
            [9, 2],
            [5, 1],
            [15, 0],
            [32, 0],
            [1162, 3],
            [66561, 9],
            [51712, 2],
            [20, 1],
            [6, 0],
            //[6291457, 20],
            //[74901729, 4],
            //[1376796946, 5],
            //[1610612737, 28],
        ];
    }
}
