<?php

namespace App;

class MaxCounters
{
    /**
     * Solution 1, 100% correctness 40% performance
     * @param $N
     * @param $A
     *
     * @return array
     */
    public function operate($N, $A): array
    {
        $counters = array_fill(0, $N, 0);
        $countersLength = count($counters);
        $operationsLength = count($A);

        for ($operInd = 0; $operInd < $operationsLength; $operInd++) {

            if ($A[$operInd] < $countersLength + 1) {

                $counters[$A[$operInd] - 1] ++;
            }
            else {
                $counters = array_fill(0, $N, max($counters));
            }
        }

        return $counters;
    }
}