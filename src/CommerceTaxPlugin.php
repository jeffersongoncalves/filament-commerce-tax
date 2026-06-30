<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Tax\Concerns\HasCommerceTaxPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\TaxRegionResource;

class CommerceTaxPlugin implements Plugin
{
    use HasCommerceTaxPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-tax';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'tax' => TaxRegionResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
