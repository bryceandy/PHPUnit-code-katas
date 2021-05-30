<?php

use App\LargestProduct;
use PHPUnit\Framework\TestCase;

class LargestProductTest extends TestCase
{
    /**
     * @dataProvider checks
     *
     * @param $data
     * @param $result
     *
     * @test
     */
    public function it_checks_the_largest_product_for_consecutive_integers($data, $result)
    {
        $this->assertEquals($result, LargestProduct::find($data));
    }

    public function checks(): array
    {
        return [
            [[3, 6, -2, -5, 7, 3], 21],
            [[-1, 1, -1], -1],
            [[3, 4], 12],
            [[-1000, -1000, 1, 1, 1, 5, 8, 100, 50, 500], 1000000],
        ];
    }
}
