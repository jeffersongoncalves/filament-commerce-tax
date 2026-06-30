<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceTaxServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-tax';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
