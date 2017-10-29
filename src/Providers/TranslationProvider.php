<?php

namespace Ipunkt\LaravelPackage\Providers;

use Ipunkt\Laravel\PackageManager\Providers\TranslationServiceProvider;

class TranslationProvider extends TranslationServiceProvider
{
    protected $namespace = 'my-package';

    protected $translationsFolder = 'resources/lang';
}