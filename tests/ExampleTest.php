<?php

namespace VinothMallow\LaravelPasswordHistoryValidation\Tests;

use VinothMallow\LaravelPasswordHistoryValidation\LaravelPasswordHistoryValidationServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelPasswordHistoryValidationServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
