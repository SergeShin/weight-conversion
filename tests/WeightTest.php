<?php

use Sergeshin\WeightConversion\Weight;

it("can convert kilograms to pounds correctly", function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toBe(220.46);
});

it("can convert kilograms to stones correctly", function () {
    $stones = Weight::kilograms(100)->toStones();

    expect($stones)->toBe(15.747);
});
