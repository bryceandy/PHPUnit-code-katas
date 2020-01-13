<?php

namespace App;

class RightRotation
{

    public static function generate($arr, $times): array
    {
        $arrLength = count($arr);

        if (count($arr) === $times ) {
            return $arr;
        }

        foreach ($arr as $itemIndex => $itemIndexValue) {

            if (($itemIndex + $times) >= $arrLength) {

                $newIndex = ($itemIndex + $times) % $arrLength;
                $arr[$newIndex] = $itemIndexValue;
            }
            else {
                $arr[$itemIndex + $times] = $itemIndexValue;
            }
        }

        return $arr;
    }
}