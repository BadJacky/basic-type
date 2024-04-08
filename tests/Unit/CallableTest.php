<?php

use function BadJacky\BasicType\type;

it('returns the same callable when value is a callable', function () {
    $callable = function () { return 'hello'; };
    expect(type($callable)->asCallable())->toBe($callable);
});

it('throws a TypeError when value is an integer', function () {
    type(123)->asCallable();
})->throws(TypeError::class);

it('throws a TypeError when value is a float', function () {
    type(1.23)->asCallable();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('hello')->asCallable();
})->throws(TypeError::class);

it('throws a TypeError when value is an array', function () {
    type(['hello'])->asCallable();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asCallable();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asCallable();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asCallable();
})->throws(TypeError::class);