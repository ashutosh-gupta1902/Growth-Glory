<?php

namespace App\Filament\Resources\Media;

use App\Filament\Resources\Media\MediaResource\Pages;
use App\Filament\Resources\Media\MediaResource\RelationManagers;
use App\Models\Media\Media;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static ?string $slug = 'Media/Media';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Media';

    protected static ?string $navigationIcon = 'heroicon-s-photo';

    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Title & Category of Media')
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('category_name')
                            ->label('Category Name')
                            ->required()
                    ])->columns(2),
                Section::make('Image')
                    ->collapsible()
                    ->schema([
                        FileUpload::make('thumbnail')->disk('public')->directory('thumbnails')
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
                TextColumn::make('category_name')
                    ->label('Category')
                    ->toggleable()
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('thumbnail')
                    ->label('Image')
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
