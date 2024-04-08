<?php

use function BadJacky\BasicType\type;

it('returns the same array when value is an array', function () {
    expect(type(['hello'])->asArray())->toBe(['hello']);
});

it('throws a TypeError when value is an integer', function () {
    type(123)->asArray();
})->throws(TypeError::class);

it('throws a TypeError when value is a float', function () {
    type(1.23)->asArray();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('hello')->asArray();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asArray();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asArray();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asArray();
})->throws(TypeError::class);