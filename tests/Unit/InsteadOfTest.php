<?php

use function BadJacky\BasicType\type;

//\BadJacky\BasicType\BasicType::asInsteadOf 测试
it('test insteadof success', function () {
    $parent = new \BadJacky\BasicType\Tests\Fixtures\Original();
    $child = new \BadJacky\BasicType\Tests\Fixtures\Child();
    expect(type($child)->asInsteadOf($parent))
        ->toBeInstanceOf(\BadJacky\BasicType\Tests\Fixtures\Original::class);
});

it('test insteadof failed', function () {
    $stand = new \BadJacky\BasicType\Tests\Fixtures\StandClass();
    $this->expectException(\TypeError::class);
    $this->expectExceptionMessage('Value is not an instance of BadJacky\BasicType\Tests\Fixtures\Original' );

    type($stand)->asInsteadOf(\BadJacky\BasicType\Tests\Fixtures\Original::class);

});