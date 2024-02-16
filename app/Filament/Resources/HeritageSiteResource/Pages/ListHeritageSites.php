<?php

namespace App\Filament\Resources\HeritageSiteResource\Pages;

use App\Filament\Resources\HeritageSiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeritageSites extends ListRecords
{
    protected static string $resource = HeritageSiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
