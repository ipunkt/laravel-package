<?php

namespace Ipunkt\LaravelPackage\Providers;

use Ipunkt\Laravel\PackageManager\Providers\ViewServiceProvider;

class ViewProvider extends ViewServiceProvider
{
    protected $namespace = LaravelPackageServiceProvider::NAMESPACE;

    protected $templatesFolder = 'resources/views';
}