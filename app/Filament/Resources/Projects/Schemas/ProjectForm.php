<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Información principal')->schema([
                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Descripción')
                    ->required()
                    ->rows(4),
                FileUpload::make('image')
                    ->label('Imagen')
                    ->image()
                    ->disk("public")
                    ->directory('projects'),
            ]),
            Section::make('Links')->schema([
                TextInput::make('demo_url')
                    ->label('URL demo')
                    ->url(),
                TextInput::make('github_url')
                    ->label('GitHub')
                    ->url(),
            ])->columns(2),
            Section::make('Configuración')->schema([
                TagsInput::make('tech_stack')
                    ->label('Tecnologías'),
                TextInput::make('order')
                    ->label('Orden')
                    ->numeric()
                    ->default(0),
                Toggle::make('visible')
                    ->label('Visible')
                    ->default(true),
                Toggle::make('featured')
                    ->label('Destacado')
                    ->default(false),
            ]),
        ]);
    }
}
