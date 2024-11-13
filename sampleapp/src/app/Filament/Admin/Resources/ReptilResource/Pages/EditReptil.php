<?php

namespace App\Filament\Admin\Resources\ReptilResource\Pages;

use App\Filament\Admin\Resources\ReptilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReptil extends EditRecord
{
    protected static string $resource = ReptilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
