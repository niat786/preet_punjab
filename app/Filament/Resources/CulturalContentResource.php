<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CulturalContentResource\Pages;
use App\Filament\Resources\CulturalContentResource\RelationManagers;
use App\Models\CulturalContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;


class CulturalContentResource extends Resource
{
    protected static ?string $model = CulturalContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Section::make()
                        ->columns([
                            'sm' => 1,
                        ])
                        ->schema([
                            Forms\Components\TextInput::make('title')->required(),
                            Textarea::make('description')->autosize(),
                            Forms\Components\RichEditor::make('content')->required()
                                ->columnStart([
                                    'sm' => 1,
                                ]),
                            // ...
                        ])
                ]);
                
         
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
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
            'index' => Pages\ListCulturalContents::route('/'),
            'create' => Pages\CreateCulturalContent::route('/create'),
            'edit' => Pages\EditCulturalContent::route('/{record}/edit'),
        ];
    }
}
