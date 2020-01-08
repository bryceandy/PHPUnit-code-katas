<?php

namespace App;

class RightRotation
{

    public static function generate($arr, $times): array
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