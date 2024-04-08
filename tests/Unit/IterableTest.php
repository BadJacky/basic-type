<?php

use function BadJacky\BasicType\type;

it('returns the same iterable when value is an iterable', function () {
    $iterable = ['hello'];
    expect(type($iterable)->asIterable())->toBe($iterable);
});

it('throws a TypeError when value is an integer', function () {
    type(123)->asIterable();
})->throws(TypeError::class);

it('throws a TypeError when value is a float', function () {
    type(1.23)->asIterable();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('hello')->asIterable();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asIterable();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asIterable();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asIterable();
})->throws(TypeError::class);