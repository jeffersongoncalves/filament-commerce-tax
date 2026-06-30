<?php

namespace JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Tax\Models\TaxRegion;
use JeffersonGoncalves\FilamentCommerce\Tax\CommerceTaxPlugin;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Pages\CreateTaxRegion;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Pages\EditTaxRegion;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Pages\ListTaxRegion;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Schemas\TaxRegionForm;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Tables\TaxRegionTable;

class TaxRegionResource extends Resource
{
    protected static ?string $model = TaxRegion::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceTaxPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-tax.navigation_group', 'Commerce — Sales');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return TaxRegionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TaxRegionTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTaxRegion::route('/'),
            'create' => CreateTaxRegion::route('/create'),
            'edit' => EditTaxRegion::route('/{record}/edit'),
        ];
    }
}
