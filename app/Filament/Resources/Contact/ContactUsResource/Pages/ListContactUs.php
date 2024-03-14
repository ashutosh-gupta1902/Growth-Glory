<?php

namespace App\Filament\Resources\Contact\ContactUsResource\Pages;

use App\Filament\Resources\Contact\ContactUsResource;
use Filament\Resources\Pages\ListRecords;

class ListContactUs extends ListRecords
{
    protected static string $resource = ContactUsResource::class;

    public static ?string $title = 'Contact Us';
}
