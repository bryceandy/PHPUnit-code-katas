<?php

namespace App;

class PrimeFactors
{
    public function generate($number): array
    {
        $factors = [];
        $divisor = 2;

        while ($number > 1) {

            while ($number % $divisor === 0) {

                $factors[] = $divisor;

                $number /= $divisor;
            }
            $divisor++;
        }

        return $factors;
    }
}