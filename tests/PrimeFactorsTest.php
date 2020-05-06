<?php


use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    function factors() {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
            [100, [2, 2, 5, 5]],
        ];
    }

    /**
     * @test
     * @dataProvider factors
     * @param int $number
     * @param array $expected
     */
    function it_tests_prime_factors(int $number, array $expected) {
        $factors = new PrimeFactors;
        $this->assertEquals($expected, $factors->generate($number));
    }

    /** @test */
    function it_generates_prime_factors_for_1() {
        $factors = new PrimeFactors;
        $this->assertEquals([], $factors->generate(1));
    }

    /** @test */
    function it_generates_prime_factors_for_2() {
        $factors = new PrimeFactors;
        $this->assertEquals([2], $factors->generate(2));
    }

    /** @test */
    function it_generates_prime_factors_for_3() {
        $factors = new PrimeFactors;
        $this->assertEquals([3], $factors->generate(3));
    }

    /** @test */
    function it_generates_prime_factors_for_4() {
        $factors = new PrimeFactors;
        $this->assertEquals([2, 2], $factors->generate(4));
    }
}
