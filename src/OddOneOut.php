<?php

namespace App;

class OddOneOut
{
    // Solution 1, excellent performance
    public static function seek($my_array)
    {
        $frequencies = array_count_values($my_array);
        $unpaired = 0;

        foreach ($frequencies as $key => $val) {

            if ($val % 2 === 1) {
                $unpaired = $key;
                break;
            }
        }

        return $unpaired;
    }

    // Solution 2, low on performance with very large arrays
    public function seek2($my_array)
    {
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
