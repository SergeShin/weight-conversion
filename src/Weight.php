<?php

namespace Sergeshin\WeightConversion;

use Whoops\Exception\ErrorException;

class Weight
{
    private float $kilograms;

    public static function kilograms(float $kilograms): self {
        $myArray = array("123", 123);

        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
