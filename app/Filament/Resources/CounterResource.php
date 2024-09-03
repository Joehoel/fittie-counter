<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CounterResource\Pages;
use App\Filament\Resources\CounterResource\RelationManagers;
use App\Models\Counter;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CounterResource extends Resource
{
    protected static ?string $model = Counter::class;

    protected static ?string $navigationIcon = 'heroicon-o-scale';

    protected static ?string $navigationLabel = 'Counters';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->columnSpanFull(),
                        Section::make()
                            ->columnSpan(1)
                            ->schema([
                                Select::make('user_one_id')
                                    ->label("Persoon 1")
                                    ->relationship('userOne', 'name')
                                    ->searchable()
                                    ->required(),
                                TextInput::make('user_one_score')
                                    ->label("Score")
                                    ->required()
                                    ->numeric()
                                    ->default(0),
                            ]),
                        Section::make()
                            ->columnSpan(1)
                            ->schema([
                                Select::make('user_two_id')
                                    ->label("Persoon 2")
                                    ->relationship('userTwo', 'name')
                                    ->searchable()
                                    ->required(),
                                TextInput::make('user_two_score')
                                    ->label("Score")
                                    ->required()
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('userOne.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('userTwo.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_one_score')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_two_score')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCounters::route('/'),
            'create' => Pages\CreateCounter::route('/create'),
            'edit' => Pages\EditCounter::route('/{record}/edit'),
        ];
    }
}
