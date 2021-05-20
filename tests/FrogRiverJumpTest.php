<?php

use PHPUnit\Framework\TestCase;
use App\FrogRiverJump;

class FrogRiverJumpTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider checker
     *
     * @param $distance
     * @param $positions
     * @param $time
     */
    public function it_finds_the_minimal_time_the_frog_can_jump($positions, $distance, $time): void
    {
        $frogRiverJump = new FrogRiverJump();

        $this->assertEquals($time, $frogRiverJump->estimate($distance, $positions));
    }

    public function checker(): array
    {
        return [
            [[1, 3, 1, 4, 2, 3, 5, 4], 5, 6],
        ];
    }
}
