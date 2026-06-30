<?php

use JeffersonGoncalves\Commerce\Tax\Models\TaxRegion;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Pages\CreateTaxRegion;
use JeffersonGoncalves\FilamentCommerce\Tax\Resources\TaxRegion\Pages\ListTaxRegion;
use Livewire\Livewire;

it('renders the tax list page', function () {
    TaxRegion::factory()->count(2)->create();

    Livewire::test(ListTaxRegion::class)->assertOk();
});

it('creates a tax record through the panel', function () {
    Livewire::test(CreateTaxRegion::class)
        ->fillForm([
            'country_code' => 'us',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(TaxRegion::query()->count())->toBe(1);
});
