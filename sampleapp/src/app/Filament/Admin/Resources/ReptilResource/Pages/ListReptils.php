<?php

namespace App\Filament\Admin\Resources\ReptilResource\Pages;

use App\Filament\Admin\Resources\ReptilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReptils extends ListRecords
{
    protected static string $resource = ReptilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
