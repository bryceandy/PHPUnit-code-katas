<?php

namespace App;

class RightRotation
{
    public static function generate($arr, $times): array
    {
        $arrLength = count($arr);

        if ($arrLength === $times ) {
            return $arr;
        }

        foreach ($arr as $itemIndex => $itemValue) {

            if ($itemIndex + $times >= $arrLength) {

                $newIndex = ($itemIndex + $times) % $arrLength;

                $arr[$newIndex] = $itemValue;
            }
            else {
                $arr[$itemIndex + $times] = $itemValue;
            }
        }

        return $arr;
    }
}