<?php

namespace App\Filament\Resources\UserlinkadminResource\Pages;

use App\Filament\Resources\UserlinkadminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserlinkadmins extends ListRecords
{
    protected static string $resource = UserlinkadminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
