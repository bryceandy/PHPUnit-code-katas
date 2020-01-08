<?php

namespace App;

class BinaryGap
{

    public function findGap($N) {

        $binNum = $this->createBinary($N);
        $binArray = array_map('intval', str_split($binNum));
        $binArrayLength = count($binArray);
        $counter = 0;
        $comparator = [];

        for ($iterator = 1; $iterator < $binArrayLength; $iterator++ ) {
            if ($binArray[$iterator] === 0) {
                $counter++;
            }

            if ($binArray[$iterator] === 1 && $counter > 0){

                $comparator[] = $counter;
                $counter = 0;
            }
        }

        if ($counter === 0 && count($comparator) === 0) {
            return 0;
        }
        return max($comparator);
    }

    public function createBinary($num, $binary = ''): int
    {

        while ($num % 2 === 0) {
            $binary = '0'.$binary;
            $num /= 2;
        }

        while ($num > 1 && $num % 2 === 1) {
            $num--;
            $binary = '1'.$binary;
            $num /= 2;

            while ($num % 2 === 0) {
                $binary = '0'.$binary;
                $num /= 2;
            }
        }

        $binary = '1'.$binary;
        return (int) $binary;
    }
}
