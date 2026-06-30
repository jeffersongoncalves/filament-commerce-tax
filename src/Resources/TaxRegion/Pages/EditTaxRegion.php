<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\TaxRegionResource;

class EditTaxRegion extends EditRecord
{
    protected static string $resource = TaxRegionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
