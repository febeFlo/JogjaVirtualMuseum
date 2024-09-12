<?php

namespace App\Filament\Resources;

use App\Exports\VotesExport;
use App\Filament\Resources\Kuesioner1Resource\Pages;
use App\Models\Kuesioner1;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class Kuesioner1Resource extends Resource
{
    protected static ?string $model = Kuesioner1::class;

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    protected static ?string $navigationLabel = 'Vote';

    protected static ?string $modelLabel = 'Votes';

    protected static ?string $navigationGroup = 'Kuisioner';

    protected static ?string $slug = 'votes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lokasi1') // Make sure you're using 'lokasi1' here, not 'lokasi 1'
                    ->relationship('lokasi1Map', 'name') // 'lokasi1Map' is the relationship in the model
                    ->required()
                    ->label('Lokasi 1'),
                Forms\Components\Select::make('lokasi2') // Make sure you're using 'lokasi1' here, not 'lokasi 1'
                    ->relationship('lokasi2Map', 'name') // 'lokasi1Map' is the relationship in the model
                    ->required()
                    ->label('Lokasi 2'),
                Forms\Components\Select::make('lokasi3') // Make sure you're using 'lokasi1' here, not 'lokasi 1'
                    ->relationship('lokasi3Map', 'name') // 'lokasi1Map' is the relationship in the model
                    ->required()
                    ->label('Lokasi 3'),
                Forms\Components\Select::make('lokasi4') // Make sure you're using 'lokasi1' here, not 'lokasi 1'
                    ->relationship('lokasi4Map', 'name') // 'lokasi1Map' is the relationship in the model
                    ->required()
                    ->label('Lokasi 4'),
                Forms\Components\Select::make('lokasi5') // Make sure you're using 'lokasi1' here, not 'lokasi 1'
                    ->relationship('lokasi5Map', 'name') // 'lokasi1Map' is the relationship in the model
                    ->required()
                    ->label('Lokasi 5'),
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
                Tables\Columns\TextColumn::make('lokasi1Map.name')
                    ->label('Lokasi 1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi2Map.name')
                    ->label('Lokasi 2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi3Map.name')
                    ->label('Lokasi 3')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi4Map.name')
                    ->label('Lokasi 4')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi5Map.name')
                    ->label('Lokasi 5')
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
                Tables\Actions\EditAction::make()->hidden(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            // ->headerActions([
            //     Action::make('export')
            //         ->label('Export to Excel')
            //         ->icon('heroicon-o-arrow-down-tray')
            //         ->action(function () {
            //             return Excel::download(new VotesExport, 'maps.xlsx');
            //         }),
            // ])
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
            'index' => Pages\ListKuesioner1s::route('/'),
            'create' => Pages\CreateKuesioner1::route('/create'),
            'edit' => Pages\EditKuesioner1::route('/{record}/edit'),
        ];
    }
}
