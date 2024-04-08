<?php


use function BadJacky\BasicType\type;

it('returns the same float when value is a float', function () {
    expect(type(1.23)->asFloat())->toBe(1.23);
});

it('throws a TypeError when value is an integer', function () {
    type(1)->asFloat();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('1.23')->asFloat();
})->throws(TypeError::class);

it('throws a TypeError when value is an array', function () {
    type([1.23])->asFloat();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asFloat();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asFloat();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asFloat();
})->throws(TypeError::class);