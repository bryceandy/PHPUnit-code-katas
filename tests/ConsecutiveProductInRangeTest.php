<?php

use PHPUnit\Framework\TestCase;
use App\ConsecutiveProductInRange;

class ConsecutiveProductInRangeTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     *
     * @param $start
     * @param $end
     * @param $expected
     */
    public function it_finds_the_number_of_consecutive_integers_whose_product_is_in_range($start, $end, $expected)
    {
        $cpir = new ConsecutiveProductInRange();

        $this->assertEquals($expected, $cpir->calculate($start, $end));
    }

    public function checks()
    {
        return [
            [6, 20, 3],
            [21, 29, 0],
        ];
    }
}
