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

        $this->assertEquals([], $factors->generate(1));
    }

    /**
     * @test
     */
    public function it_generates_prime_factors_for_2(): void
    {
        $factors = new PrimeFactors();

        $this->assertEquals([2], $factors->generate(2));
    }

    /**
     * @test
     */
    public function it_generates_prime_factors_for_3(): void
    {
        $factors = new PrimeFactors();

        $this->assertEquals([3], $factors->generate(3));
    }

    /**
     * @test
     */
    public function it_generates_prime_factors_for_4(): void
    {
        $factors = new PrimeFactors();

        $this->assertEquals([2, 2], $factors->generate(4));
    }
}
