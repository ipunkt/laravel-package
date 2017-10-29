<?php

namespace Ipunkt\LaravelPackage\Providers;

use Illuminate\Support\AggregateServiceProvider;

class LaravelPackageServiceProvider extends AggregateServiceProvider
{
    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        ConfigurationProvider::class,
    ];
}