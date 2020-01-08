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
            [15, 0],
            [32, 0],
        ];
    }
}
