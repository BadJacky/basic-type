<?php

use function BadJacky\BasicType\type;

it('returns the same object when value is an object', function () {
    $object = new stdClass();
    expect(type($object)->asObject())->toBe($object);
});

it('throws a TypeError when value is an integer', function () {
    type(123)->asObject();
})->throws(TypeError::class);

it('throws a TypeError when value is a float', function () {
    type(1.23)->asObject();
})->throws(TypeError::class);

it('throws a TypeError when value is a string', function () {
    type('hello')->asObject();
})->throws(TypeError::class);

it('throws a TypeError when value is an array', function () {
    type(['hello'])->asObject();
})->throws(TypeError::class);

it('throws a TypeError when value is a bool', function () {
    type(true)->asObject();
})->throws(TypeError::class);

it('throws a TypeError when value is null', function () {
    type(null)->asObject();
})->throws(TypeError::class);