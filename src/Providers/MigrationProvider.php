<?php

namespace Ipunkt\LaravelPackage\Providers;

use Ipunkt\Laravel\PackageManager\Providers\MigrationServiceProvider;

class MigrationProvider extends MigrationServiceProvider
{
    protected $migrationsFolder = 'database/migrations';
}