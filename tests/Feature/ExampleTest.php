<?php

test('example', function () {
    expect(true)->toBeTrue();
    expect(
        \BadJacky\BasicType\type('string')
            ->asString()
    )
        ->toBe('string');
});
