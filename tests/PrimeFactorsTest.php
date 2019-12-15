<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     */
    public function it_generates_prime_factors_for_1(): void
    {
        $factors = new PrimeFactors();

        $this->assertEquals([1], $factors->generate(1));
    }
}
