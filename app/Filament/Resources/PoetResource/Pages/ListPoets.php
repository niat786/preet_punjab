<?php

namespace App\Filament\Resources\PoetResource\Pages;

use App\Filament\Resources\PoetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPoets extends ListRecords
{
    protected static string $resource = PoetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
