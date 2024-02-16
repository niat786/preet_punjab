<?php

namespace App\Filament\Resources\HeritageSiteResource\Pages;

use App\Filament\Resources\HeritageSiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeritageSite extends EditRecord
{
    protected static string $resource = HeritageSiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
