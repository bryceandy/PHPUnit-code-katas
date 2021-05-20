<?php

use App\MissingPermutationElement;
use PHPUnit\Framework\TestCase;

class MissingPermutationElementTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     *
     * @param $arr
     * @param $expectedMissing
     */
    public function it_finds_the_missing_element_in_a_permutation($arr, $expectedMissing): void
    {
        $this->assertEquals($expectedMissing, MissingPermutationElement::find($arr));
    }

    public function checks(): array
    {
        return [
            [[2, 9, 5, 8, 4, 1, 6, 3], 7],
            [[76, 11, 12, 13, 14, 15, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 16, 17, 18, 19, 20, 70, 69, 71, 1, 2, 3,
                4, 5, 6, 7, 8, 9, 10, 66, 72, 61, 75, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 62, 73, 21, 22, 23, 24,
                25, 26, 27, 28, 29, 30, 68, 65, 74, 64, 67, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40],
            63],
        ];
    }
}
