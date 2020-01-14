<?php

namespace App;

class MaxCounters
{
    /**
     * Solution 1, 100% correctness 40% performance.
     * Won't work well with very huge arrays. O(N*M)
     *
     * @param $N
     * @param $A
     *
     * @return array
     */
    public function operate($N, $A): array
    {
        $counters = array_fill(0, $N, 0);
        $countersLength = count($counters);

        foreach ($A as $val) {

            if ($val < $countersLength + 1) {

                $counters[$val - 1] ++;
            }
            else{
                $counters = array_fill(0, $N, max($counters));
            }
        }

        return $counters;
    }
}