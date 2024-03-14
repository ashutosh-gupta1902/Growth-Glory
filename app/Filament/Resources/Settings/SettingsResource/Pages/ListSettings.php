<?php

namespace App\Filament\Resources\Settings\SettingsResource\Pages;

use App\Filament\Resources\Settings\SettingsResource;
use App\Models\Settings\Setting;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSettings extends ListRecords
{
    protected static string $resource = SettingsResource::class;

    protected function getHeaderActions(): array
    {
        $rowCount = Setting::count();
        if ($rowCount <= 0) {
            return [
                Actions\CreateAction::make(),
            ];
        } else {
            return [];
        }
    }
}
