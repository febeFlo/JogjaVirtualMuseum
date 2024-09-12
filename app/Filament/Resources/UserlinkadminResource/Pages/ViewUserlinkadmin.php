<?php

namespace App\Filament\Resources\UserlinkadminResource\Pages;

use App\Filament\Resources\UserlinkadminResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserlinkadmin extends ViewRecord
{
    protected static string $resource = UserlinkadminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
