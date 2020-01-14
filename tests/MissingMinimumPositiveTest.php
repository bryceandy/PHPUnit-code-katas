<?php

use PHPUnit\Framework\TestCase;
use App\MissingMinimumPositive;

class MissingMinimumPositiveTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checker
     *
     * @param $arr
     * @param $expected
     */
    public function it_determines_the_minimum_positive_missing_integer($arr, $expected): void
    {
        $missingInteger = new MissingMinimumPositive();

        $this->assertEquals($expected, $missingInteger->solve($arr));
    }

    /**
     * @return array
     */
    public function checker(): array
    {
        return [
            [[1, 3, 6, 4, 1, 2], 5],
            [[1, 2, 3], 4],
            [[-1, -3], 1],
        ];
    }
}
