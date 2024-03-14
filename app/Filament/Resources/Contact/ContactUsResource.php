<?php

namespace App\Filament\Resources\Contact;

use App\Filament\Resources\Contact\ContactUsResource\Pages;
use App\Filament\Resources\Contact\ContactUsResource\RelationManagers;
use App\Models\ContactUs\ContactUs;
use Filament\Forms\Components\DatePicker;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\View\ComponentSlot;

class ContactUsResource extends Resource
{
    protected static ?string $model = ContactUs::class;

    protected static ?string $slug = 'contact/contactus';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $pluralModelLabel = 'Contact Us';

    protected static ?string $navigationGroup = 'Contact Us';

    protected static ?string $navigationIcon = 'heroicon-s-chat-bubble-left-right';

    protected static ?int $navigationSort = 4;

    // This function is Used to Disable the Button for creating New record
    public static function canCreate(): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable()
                    ->toggleable()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable()
                    ->toggleable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->toggleable()
                    ->sortable(),
                TextColumn::make('phone_number')
                    ->searchable()
                    ->toggleable()
                    ->sortable(),
                TextColumn::make('subject')
                    ->searchable()
                    ->toggleable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime()
            ])

            ->filters([
                //
            ])

            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public function getBreadcrumbs()
    {
        return 'abc';
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactUs::route('/'),
            // 'view' => Pages\ViewContactUs::route('/{record}/view'),

        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Message From User')
                    ->schema([
                        TextEntry::make('message')
                            ->label('')
                    ]),
            ]);
    }
}
