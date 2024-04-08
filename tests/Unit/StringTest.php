<?php

use function BadJacky\BasicType\type;

it('returns the same string when value is a string', function () {
    expect(type('hello')->asString())->toBe('hello');
});

it('throws a TypeError when value is an integer', function () {
    type(123)->asString();
})->throws(TypeError::class);

it('throws a TypeError when value is a float', function () {
    type(1.23)->asString();
})->throws(TypeError::class);

it('throws a TypeError when value is an array', function () {
    type(['hello'])->asString();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asString();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asString();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asString();
})->throws(TypeError::class);