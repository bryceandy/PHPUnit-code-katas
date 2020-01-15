<?php

use PHPUnit\Framework\TestCase;
use App\MinimumTurns;

class MinimumTurnsTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     *
     * @param $arr
     * @param $expected
     */
    public function it_finds_the_minimum_turns_for_alternating_coins($arr, $expected)
    {
        $minTurns = new MinimumTurns();

        $this->assertEquals($expected, $minTurns->evaluate($arr));
    }

    public function checks()
    {
        return [
            [[1, 0, 1, 0, 1, 1], 1],
            [[1, 1, 0, 1, 1], 2],
            [[0, 1, 0], 0],
            [[0, 1, 1, 0], 2],
        ];
    }
}
