<?php

use function BadJacky\BasicType\type;

it('returns the same bool when value is a bool', function () {
    expect(type(true)->asBool())->toBe(true);
});

it('throws a TypeError when value is an integer', function () {
    type(123)->asBool();
})->throws(TypeError::class);

it('throws a TypeError when value is a float', function () {
    type(1.23)->asBool();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('hello')->asBool();
})->throws(TypeError::class);

it('throws a TypeError when value is an array', function () {
    type(['hello'])->asBool();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asBool();
})->throws(TypeError::class);

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asBool();
})->throws(TypeError::class);