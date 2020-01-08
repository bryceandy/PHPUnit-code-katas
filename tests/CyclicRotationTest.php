<?php

use App\CyclicRotation;
use PHPUnit\Framework\TestCase;

class CyclicRotationTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checkCases
     *
     * @param $arr
     * @param $times
     * @param $result
     */
    public function it_rotates_an_array_to_the_right($arr, $times, $result): void
    {
        $this->assertEquals($result, CyclicRotation::toRight($arr, $times));
    }

    /**
     * @return array
     */
    public function checkCases(): array
    {
        return [
            [[3, 4, 5, 6], 3, [4, 5, 6, 3]],
            [[1, 2, 3, 4, 5, 6, 7], 10, [5, 6, 7, 1, 2, 3, 4]],
        ];
    }
}
