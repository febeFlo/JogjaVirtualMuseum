<?php

namespace App\Filament\Resources\Kuesioner34Resource\Pages;

use App\Filament\Resources\Kuesioner34Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKuesioner34 extends EditRecord
{
    protected static string $resource = Kuesioner34Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
