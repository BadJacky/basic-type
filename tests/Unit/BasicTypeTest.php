<?php

use function BadJacky\BasicType\type;

it('returns the same bool when value is a bool', function () {
    expect(type(true)->asBool())->toBe(true);
});

it('returns the same object when value is an object', function () {
    $object = new stdClass();
    expect(type($object)->asObject())->toBe($object);
});

it('returns null when value is null', function () {
    expect(type(null)->asNull())->toBeNull();
});

it('returns the same callable when value is a callable', function () {
    $callable = function () {
        return 'hello';
    };
    expect(type($callable)->asCallable())->toBe($callable);
});

it('returns the same iterable when value is an iterable', function () {
    $iterable = ['hello'];
    expect(type($iterable)->asIterable())->toBe($iterable);
});

it('returns the same array when value is an array', function () {
    expect(type(['hello'])->asArray())->toBe(['hello']);
});

it('returns the same integer when value is an integer', function () {
    expect(type(123)->asInt())->toBe(123);
});

it('returns the same string when value is a string', function () {
    expect(type('hello')->asString())->toBe('hello');
});

it('returns the same float when value is a float', function () {
    expect(type(1.23)->asFloat())->toBe(1.23);
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

it('throws a TypeError when value is an object', function () {
    type(new stdClass())->asBool();
})->throws(TypeError::class);

it('produces the same result with type function and setValue method', function () {
    expect(type(123))
        ->toBe(app('basic-type')->setValue(123));
});
