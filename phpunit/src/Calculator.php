<?php

namespace App;

class Calculator
{
    public function add(...$operands)
    {
        return array_sum($operands);
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply(...$operands)
    {
        return array_product($operands);
    }

    public function divide($a, $b)
    {
        return $a / $b;
    }
}
