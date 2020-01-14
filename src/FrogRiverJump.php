<?php

namespace App;

class FrogRiverJump
{
    /**
     * @param $distance
     * @param $positions
     *
     * @return int
     */
    public function estimate($distance, $positions): int
    {
        foreach ($positions as $key => $val) {

            if (!isset($position_reached[$val])) {

                $position_reached[$val] = true;

                $distance--;
            }

            if (!$distance) {
                return $key;
            }
        }

        return -1;
    }
}