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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;





class PoetResource extends Resource
{
    protected static ?string $model = Poet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make([

                    Grid::make([
                        'default' => 1,
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 3,
                        '2xl' => 4,
                    ])->schema([
                        Forms\Components\TextInput::make('pen_name')->required(),
                        Forms\Components\TextInput::make('real_name')->required(),
                        Forms\Components\DatePicker::make('date_of_birth')->required(),
                    ]),
    
                    Grid::make([
                        'sm' => 1,
                        'md' => 2,
                    ])->schema([
                        FileUpload::make('cover_image')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            null,
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),
                        FileUpload::make('poet_image')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            null,
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),
                    ]),
     
               
                                Forms\Components\RichEditor::make('bio')->required()
                            

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
