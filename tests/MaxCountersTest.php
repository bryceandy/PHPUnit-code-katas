<?php

use PHPUnit\Framework\TestCase;
use App\MaxCounters;

class MaxCountersTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider check
     *
     * @param $operations
     * @param $counters
     * @param $result
     */
    public function it_provides_the_max_counters_after_consecutive_operations($operations, $counters, $result): void
    {
        $maxCounters = new MaxCounters();

        $this->assertEquals($result, $maxCounters->operate($counters, $operations));
    }

    /**
     * @return array
     */
    public function check(): array
    {
        return [
            [[3, 4, 4, 6, 1, 4, 4], 5, [3, 2, 2, 4, 2]],
        ];
    }
}
