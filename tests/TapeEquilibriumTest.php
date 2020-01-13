<?php

use App\TapeEquilibrium;
use PHPUnit\Framework\TestCase;

class TapeEquilibriumTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     *
     * @param $arr
     * @param $expected
     */
    public function it_determines_the_minimum_difference_of_a_tape($arr, $expected): void
    {
        $this->assertEquals($expected, TapeEquilibrium::solution($arr));
    }

    /**
     * @return array
     */
    public function checks(): array
    {
        return [
            [[3, 1, 2, 4, 3], 1],
            [[11, -5, 7], 1],
        ];
    }
}
