<?php

namespace Sergeshin\WeightConversion;

class Weight
{
    private float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2047;
    }
}
