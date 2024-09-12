<?php

namespace App\Filament\Resources;

use App\Exports\VotesExport;
use App\Filament\Resources\Kuesioner34Resource\Pages;
use App\Filament\Resources\Kuesioner34Resource\RelationManagers;
use App\Models\Kuesioner34;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;

class Kuesioner34Resource extends Resource
{
    protected static ?string $model = Kuesioner34::class;

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationLabel = 'Feedback';

    protected static ?string $modelLabel = 'Feedback';

    protected static ?string $navigationGroup = 'Kuisioner';

    protected static ?string $slug = 'Feedback';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('lokasi_menyenangkan')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('lokasi_ribut')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('lokasi_bersemangat')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('lokasi_sepi')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('lokasi_tenang')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('lokasi_mengganggu')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('lokasi_ramai')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('lokasi_membosankan')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Textarea::make('narasi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('map_id')
                    ->relationship('map', 'name')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.id')
                    ->label('ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi_menyenangkan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_ribut')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_bersemangat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_sepi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_tenang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_mengganggu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_ramai')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasi_membosankan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('map.name')
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()->hidden(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                Action::make('export')
                    ->label('Export to Excel')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('success') // Makes the button green
                    ->action(function () {
                        return Excel::download(new VotesExport, 'maps.xlsx');
                    }),
            ])
        ;
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
            'index' => Pages\ListKuesioner34s::route('/'),
            'create' => Pages\CreateKuesioner34::route('/create'),
            'view' => Pages\ViewKuesioner34::route('/{record}'),
            'edit' => Pages\EditKuesioner34::route('/{record}/edit'),
        ];
    }
}
