<?php

use PHPUnit\Framework\TestCase;
use App\PermCheck;

class PermCheckTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checks
     *
     * @param $arr
     * @param $result
     */
    public function  it_will_determine_if_an_array_is_a_permutation($arr, $result): void
    {
        $this->assertEquals($result, (new PermCheck)->evaluate($arr));
    }

    public function checks(): array
    {
        return [
            [[1, 2, 2, 5, 5, 6], 0],
            [[4, 6, 1, 5, 3, 2], 1],
        ];
    }
}
