<?php

namespace BadJacky\BasicType\Tests;

use BadJacky\BasicType\BasicTypeServiceProvider;
use Orchestra\Testbench\Concerns\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

}
