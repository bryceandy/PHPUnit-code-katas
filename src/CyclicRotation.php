<?php

namespace App;

class CyclicRotation
{

    public static function toRight($arr, $times): array
    {
        $rotated = [];
        $arrLength = count($arr);

        if (count($arr) === $times ) {
            return $arr;
        }

        foreach ($arr as $itemIndex => $itemIndexValue) {

            if (($itemIndex + $times) >= $arrLength) {

                $newIndex = ($itemIndex + $times) % $arrLength;
                $rotated[$newIndex] = $itemIndexValue;
            }
            else {
                $rotated[$itemIndex + $times] = $itemIndexValue;
            }
        }

        return $rotated;
    }
}