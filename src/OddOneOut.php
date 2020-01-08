<?php

namespace App;

class OddOneOut
{

    public static function seek($my_array) {

        foreach ($my_array as $key => $val) {

            if ($my_array[$key] ?? 0) {

                $originalValue = $val;
                unset($my_array[$key]);

                if (in_array($originalValue, $my_array, true)) {

                    unset($my_array[array_search($originalValue, $my_array, true)]);
                }
                else {
                    $my_array[$key] = $originalValue;
                }
            }
        }

        $indexedResult = array_values($my_array);
        return $indexedResult[0];
    }
}
