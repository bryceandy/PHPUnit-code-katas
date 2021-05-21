<?php

use App\OddOneOut;
use PHPUnit\Framework\TestCase;

class OddOneOutTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider check
     *
     * @param $arr
     * @param $expected
     */
    public function it_finds_the_odd_element_in_the_array($arr, $expected): void
    {
        $this->assertEquals($expected, OddOneOut::seek($arr));
    }

    public function check():array
    {
        return [
            [[1, 4, 3, 4, 7, 7, 1], 3],
            [[9, 3, 9, 3, 9, 7, 9], 7],
        ];
    }
}
