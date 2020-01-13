<?php

use App\RightRotation;
use PHPUnit\Framework\TestCase;

class RightRotationTest extends TestCase
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
        $this->assertEquals($result, RightRotation::generate($arr, $times));
    }

    /**
     * @return array
     */
    public function checkCases(): array
    {
        return [
            [[3, 4, 5, 6], 3, [4, 5, 6, 3]],
            [[65, -2, 11, 0, 3], 5, [65, -2, 11, 0, 3]],
            [[1, 2, 3, 4, 5, 6, 7], 10, [5, 6, 7, 1, 2, 3, 4]],
        ];
    }
}
