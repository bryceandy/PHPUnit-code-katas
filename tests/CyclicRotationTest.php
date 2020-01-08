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
        $rotation = new CyclicRotation();

        $this->assertEquals($result, $rotation->toRight($arr, $times));
    }

    /**
     * @return array
     */
    public function checkCases(): array
    {
        return [
            [[3, 4, 5, 6], 3, [4, 5, 6, 3]],
        ];
    }
}
