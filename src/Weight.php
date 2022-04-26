<?php

namespace Sergeshin\WeightConversion;

class Weight
{
    private float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        $myArray = ["123", 123];

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

    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }
}
