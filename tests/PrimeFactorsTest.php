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
            [999, [3, 3, 3, 37]],
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
}
