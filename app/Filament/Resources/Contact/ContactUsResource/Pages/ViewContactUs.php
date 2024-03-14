<?php

namespace App\Filament\Resources\Contact\ContactUsResource\Pages;

use App\Filament\Resources\Contact\ContactUsResource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Resources\Pages\ViewRecord;
use App\Models\ContactUs\ContactUs;

class ViewContactUs extends ViewRecord
{
    protected static string $resource = ContactUsResource::class;

    protected static ?string $model = ContactUs::class;


    public static function table(Table $table, string|int $record): Table
    {
        return $table
            ->columns([
                TextColumn::make('message')
                    ->searchable()
                    ->toggleable()
                    ->sortable(),
            ]);
    }
}
