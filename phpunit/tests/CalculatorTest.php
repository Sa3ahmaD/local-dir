<?php

use PHPUnit\Framework\TestCase;

// require 'src/calculator.php';

class CalculatorTest extends TestCase
{
    private $calc;

    protected function setup():void
    {
        $this->calc = new \App\Calculator();
    }

    public function testAddition()
    {
        $result = $this->calc->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testMultiply()
    {
        $result = $this->calc->multiply(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testSubtract()
    {
        $result = $this->calc->subtract(13, 3);
        $this->assertEquals(10, $result);
    }

    public function testDivide()
    {
        $result = $this->calc->divide(9, 3);
        $this->assertEquals(3, $result);
    }

    public function dataProviderForDivision()
    {
        return [
            [15, 3, 5],
            [21, 3, 7],
            [27, 3, 9],
        ];
    }

    /** @dataProvider dataProviderForDivision */
    public function testDivideUsingDataProvider($a, $b, $expected)
    {
        $result = $this->calc->divide($a, $b);
        $this->assertEquals($expected, $result);
    }
}
