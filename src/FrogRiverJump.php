<?php

namespace App;

class FrogRiverJump
{
    public function estimate($distance, $positions): int
    {
        foreach ($positions as $key => $val)
        {
            if (! isset($positionReached[$val])) {
                $positionReached[$val] = true;

                $distance --;
            }

            if (! $distance) {
                return $key;
            }
        }

        return -1;
    }
}