<?php

namespace App\Filament\Resources\Settings;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\Settings\SettingsResource\Pages;
use App\Filament\Resources\Settings\SettingsResource\RelationManagers;
use App\Models\Settings\Setting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingsResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $slug = 'Settings/Setting';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-s-adjustments-horizontal';

    protected static ?int $navigationSort = 6;

    // public static $updateSiteSettingsClicked = false; //  flag fro logo and title updation

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Title & Slogan')
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('slogan')
                            ->label('Slogan')
                            ->required()
                    ])->columns(2),
                Section::make('Image')
                    ->collapsible()
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->disk('public')
                            ->directory('thumbnails')
                            ->imageEditor()
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->toggleable()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slogan')
                    ->label('Slogan')
                    ->toggleable()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->toggleable()
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    // ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                    Action::make('Update in Site')
                        ->icon('heroicon-s-arrow-path')
                        ->Action(
                            function (Model $record) {
                                $record->update(['status' => 'Active']);
                            }
                        )
                ])
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}
