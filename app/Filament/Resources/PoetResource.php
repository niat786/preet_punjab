<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoetResource\Pages;
use App\Filament\Resources\PoetResource\RelationManagers;
use App\Models\Poet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;




class PoetResource extends Resource
{
    protected static ?string $model = Poet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pen_name')->required(),
                Forms\Components\TextInput::make('real_name')->required(),
                Forms\Components\DatePicker::make('date_of_birth')->required(),
                Section::make()
                        ->columns([
                            'sm' => 1,
                        ])
                        ->schema([
                            Forms\Components\RichEditor::make('bio')->required()
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
 
                TextColumn::make('pen_name'),
                TextColumn::make('real_name'),
                TextColumn::make('date_of_birth')->date(),
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
            'index' => Pages\ListPoets::route('/'),
            'create' => Pages\CreatePoet::route('/create'),
            'edit' => Pages\EditPoet::route('/{record}/edit'),
        ];
    }
}
