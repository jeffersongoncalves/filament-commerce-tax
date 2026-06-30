<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TaxRegionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('country_code'),
                        TextInput::make('province_code'),
                    ])->columns(2),
            ]);
    }
}
