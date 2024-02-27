<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeritageSiteResource\Pages;
use App\Filament\Resources\HeritageSiteResource\RelationManagers;
use App\Models\HeritageSite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeritageSiteResource extends Resource
{
    protected static ?string $model = HeritageSite::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeritageSites::route('/'),
            'create' => Pages\CreateHeritageSite::route('/create'),
            'edit' => Pages\EditHeritageSite::route('/{record}/edit'),
        ];
    }
}
