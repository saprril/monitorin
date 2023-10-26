<?php

namespace App\Filament\Resources\MahasiswasResource\Pages;

use App\Filament\Resources\MahasiswasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMahasiswas extends EditRecord
{
    protected static string $resource = MahasiswasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
