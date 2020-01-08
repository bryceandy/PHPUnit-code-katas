<?php

namespace App;

class OddOneOut
{

    public static function seek($A) {

        foreach ($A as $arrIndex => $arrIndexValue) {

            $originalValue = $arrIndexValue;
            unset($A[$arrIndex]);

            if (in_array($originalValue, $A, true)) {

                unset($A[array_search($originalValue, $A, true)]);
            }
            else {
                $A[$arrIndex] = $originalValue;
            }
        }

        $indexed = array_values($A);
        return $indexed[0];
    }
}
