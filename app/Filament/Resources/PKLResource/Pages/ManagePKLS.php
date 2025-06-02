<?php

namespace App\Filament\Resources\PKLResource\Pages;

use App\Filament\Resources\PKLResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePKLS extends ManageRecords
{
    protected static string $resource = PKLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
