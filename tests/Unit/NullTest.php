<?php

use function BadJacky\BasicType\type;

it('returns null when value is null', function () {
    expect(type(null)->asNull())->toBeNull();
});

it('throws a TypeError when value is an integer', function () {
    type(123)->asNull();
})->throws(TypeError::class);

it('throws a TypeError when value is a float', function () {
    type(1.23)->asNull();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('hello')->asNull();
})->throws(TypeError::class);

it('throws a TypeError when value is an array', function () {
    type(['hello'])->asNull();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asNull();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asNull();
})->throws(TypeError::class);