<?php

namespace App;

class MaxCounters
{
    /**
     * Solution 1, 100 % correctness & performance. O(N+M)
     *
     * @param $N
     * @param $A
     *
     * @return array
     */
    public function operate($N, $A)
    {
        $counters = array_fill(0, $N, 0);
        $maximumCounter = 0;
        $currentMaximum = 0;

        foreach ($A as $val) {

            if ($val < $N + 1) {

                if ($counters[$val - 1] < $maximumCounter) {

                    $counters[$val - 1] = $maximumCounter;
                }

                $counters[$val - 1] ++;

                if ($currentMaximum < $counters[$val - 1]) {

                    $currentMaximum  = $counters[$val - 1];
                }
            }

            else {

                $maximumCounter = $currentMaximum;
            }
        }

        for ($index = 0; $index < $N; $index++) {

            if ($counters[$index] < $maximumCounter) {

                $counters[$index] = $maximumCounter;
            }
        }

        return $counters;
    }

    // Solution 2, 100% correctness 40% performance.
     // Won't work well with very huge arrays. O(N*M)
    public function operate2($N, $A)
    {
        $counters = array_fill(0, $N, 0);
        $countersLength = count($counters);

        foreach ($A as $val) {

            if ($val < $countersLength + 1) {

                $counters[$val - 1] ++;
            }
            else {
                $counters = array_fill(0, $N, max($counters));
            }
        }

        return $counters;
    }
}