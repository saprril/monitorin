<?php

namespace App\Filament\Resources\DosenWalisResource\Pages;

use App\Filament\Resources\DosenWalisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDosenWalis extends EditRecord
{
    protected static string $resource = DosenWalisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
