<?php

namespace App\Filament\Resources\Content\PageResource\Pages;

use App\Filament\Resources\Content\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class Listpages extends ListRecords
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
