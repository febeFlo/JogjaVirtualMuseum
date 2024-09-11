<?php

namespace App\Filament\Resources\UserlinkadminResource\Pages;

use App\Filament\Resources\UserlinkadminResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserlinkadmin extends EditRecord
{
    protected static string $resource = UserlinkadminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
