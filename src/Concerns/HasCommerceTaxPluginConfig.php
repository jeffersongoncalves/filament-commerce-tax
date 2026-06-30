<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceTaxPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-tax';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Sales';
    }
}
