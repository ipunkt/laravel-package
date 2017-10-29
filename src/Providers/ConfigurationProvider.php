<?php

namespace Ipunkt\LaravelPackage\Providers;

use Ipunkt\Laravel\PackageManager\Providers\ConfigurationServiceProvider;

class ConfigurationProvider extends ConfigurationServiceProvider
{
    protected $configurationFiles = [
        'package' => 'config/config.php',
    ];
}