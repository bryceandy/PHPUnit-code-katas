<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider factors
     *
     * @param $number
     * @param $expected
     */
    public function it_generates_prime_factors($number, $expected): void
    {
        $this->assertEquals($expected, (new PrimeFactors)->generate($number));
    }

    public function factors(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [20, [2, 2, 5]],
            [999, [3, 3, 3, 37]],
        ];
    }
}
