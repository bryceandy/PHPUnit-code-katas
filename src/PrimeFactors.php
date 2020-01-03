<?php

namespace App;

class PrimeFactors
{
    /**
     * This piece of code is so clean such that it
     * makes you wanna look at it over & over 🤯
     *
     * @param $number
     *
     * @return array
     */
    public function generate($number): array
    {
        $factors = [];

        for ($divisor = 2; $number > 1; $divisor++) {

            for (; $number % $divisor === 0; $number /= $divisor) {

                $factors[] = $divisor;
            }
        }

        return $factors;
    }
}