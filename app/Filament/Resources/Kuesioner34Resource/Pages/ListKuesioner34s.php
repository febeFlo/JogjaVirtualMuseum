<?php

namespace App\Filament\Resources\Kuesioner34Resource\Pages;

use App\Filament\Resources\Kuesioner34Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKuesioner34s extends ListRecords
{
    protected static string $resource = Kuesioner34Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->hidden(),
        ];
    }
}
