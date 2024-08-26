<?php

class Odd
{
    public function isOdd(int|float $number): bool
    {
        return $number % 2 !== 0;
    }

    public function isEven(int|float $number): bool
    {
        return $number % 2 === 0;
    }
}
