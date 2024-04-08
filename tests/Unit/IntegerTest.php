<?php

use function BadJacky\BasicType\type;

it('returns the same integer when value is an integer', function () {
    expect(type(123)->asInt())->toBe(123);
});

it('throws a TypeError when value is a float', function () {
    type(1.23)->asInt();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('123')->asInt();
})->throws(TypeError::class);

it('throws a TypeError when value is an array', function () {
    type([123])->asInt();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asInt();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asInt();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asInt();
})->throws(TypeError::class);