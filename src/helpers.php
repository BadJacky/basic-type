<?php

namespace BadJacky\BasicType;

function type(mixed $value): \BadJacky\BasicType\BasicType
{
    return app('basic-type')->setValue($value);
}