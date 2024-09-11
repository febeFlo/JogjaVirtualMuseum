<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserlinkadminResource\Pages;
use App\Filament\Resources\UserlinkadminResource\RelationManagers;
use App\Models\Userlinkadmin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserlinkadminResource extends Resource
{
    protected static ?string $model = Userlinkadmin::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-vertical';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?string $modelLabel = 'User Settings';

    protected static ?string $slug = 'uSettings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->disabled()
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'email')
                    ->label('Email')
                    ->required(),
                Forms\Components\Toggle::make('isAdmin')
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->maxLength(191)
                    ->label('Survey Q-Method')
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.id')
                    ->label('User ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('isAdmin')
                    ->boolean(),
                Tables\Columns\TextColumn::make('link')
                    ->label('Survey Q-Method')
                    ->searchable(),
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
            'index' => Pages\ListUserlinkadmins::route('/'),
            'create' => Pages\CreateUserlinkadmin::route('/create'),
            'view' => Pages\ViewUserlinkadmin::route('/{record}'),
            'edit' => Pages\EditUserlinkadmin::route('/{record}/edit'),
        ];
    }
}
