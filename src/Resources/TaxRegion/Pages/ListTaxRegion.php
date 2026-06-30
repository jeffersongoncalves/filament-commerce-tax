<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\TaxRegionResource;

class ListTaxRegion extends ListRecords
{
    protected static string $resource = TaxRegionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
