<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class TaxRegionForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('country_code'),
                        TextInput::make('province_code'),
                    ])->columns(2),
            ]);
    }
}
