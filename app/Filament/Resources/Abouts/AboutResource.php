<?php

namespace App\Filament\Resources\Abouts;

use App\Filament\Resources\Abouts\Pages\ManageAbouts;
use App\Models\About;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Información personal')->schema([
                TextInput::make('name')
                    ->label('Nombre completo')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tagline')
                    ->label('Tagline')
                    ->placeholder('ej: Fullstack Developer · Laravel & Vue')
                    ->required()
                    ->maxLength(255),
                Textarea::make('bio')
                    ->label('Biografía')
                    ->required()
                    ->rows(4),
                TextInput::make('location')
                    ->label('Ubicación')
                    ->placeholder('ej: Buenos Aires, Argentina')
                    ->maxLength(255),
                FileUpload::make('avatar')
                    ->label('Foto de perfil')
                    ->image()
                    ->disk('public')
                    ->directory('about')
            ]),
            Section::make('Contacto & Redes')->schema([
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),
                TextInput::make('github_url')
                    ->label('GitHub')
                    ->url(),
                TextInput::make('linkedin_url')
                    ->label('LinkedIn')
                    ->url(),
                TextInput::make('cv_url')
                    ->label('URL del CV')
                    ->url(),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Foto'),
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                TextColumn::make('tagline')
                    ->label('Tagline')
                    ->searchable(),
                TextColumn::make('location')
                    ->label('Ubicación'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageAbouts::route('/'),
        ];
    }
}
