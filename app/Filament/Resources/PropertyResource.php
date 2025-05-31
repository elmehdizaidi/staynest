<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function getModelLabel(): string
    {
        return 'Propriété';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Propriétés';
    }

    public static function getNavigationLabel(): string
    {
        return 'Gestion des Propriétés';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nom du bien')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(2),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->rows(4)
                    ->columnSpan(2),

                TextInput::make('price_per_night')
                    ->label('Prix par nuit (€)')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->columnSpan(1),

                FileUpload::make('photo')
                    ->label('Photo')
                    ->image()
                    ->directory('properties')
                    ->required()
                    ->imagePreviewHeight('200')
                    ->columnSpan(1),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->toggleable(),

                ImageColumn::make('photo')
                    ->label('Photo')
                    ->rounded()
                    ->size(50)
                    ->getStateUsing(fn($record) => asset('storage/' . $record->photo)),

                TextColumn::make('name')
                    ->label('Nom du bien')
                    ->sortable()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('price_per_night')
                    ->label('Prix par nuit (€)')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => number_format($state, 2, ',', ' ') . ' €'),

                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->date('d/m/Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make()
                    ->button()
                    ->color('primary'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->color('danger'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
