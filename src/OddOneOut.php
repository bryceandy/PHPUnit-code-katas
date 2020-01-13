<?php

namespace App;

class OddOneOut
{

    // Solution is low on performance with very large arrays
    public static function seek($my_array) {

        foreach ($my_array as $key => $val) {

            if ($my_array[$key] ?? 0) { // Is the value of this element still present?...

                $originalValue = $val; // Fetch its original value

                unset($my_array[$key]); // Remove the value from the array

                if (in_array($originalValue, $my_array, true)) { // If there's a similar element(pair) found

                    unset($my_array[array_search($originalValue, $my_array, true)]); // Remove it too
                }
                else {
                    $my_array[$key] = $originalValue; // Or else put the value back in the array
                }
            }
        }

        $indexedResult = array_values($my_array); // Order the array to have the only remaining value
        return $indexedResult[0];
    }
}
