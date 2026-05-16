<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Institución')->schema([
                TextInput::make('institution')
                    ->label('Institución')
                    ->required()
                    ->maxLength(255),
                TextInput::make('degree')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                TextInput::make('field')
                    ->label('Campo de estudio')
                    ->required()
                    ->maxLength(255),
            ]),
            Section::make('Período')->schema([
                DatePicker::make('start_date')
                    ->label('Fecha de inicio')
                    ->required(),
                DatePicker::make('end_date')
                    ->label('Fecha de fin'),
                Toggle::make('current')
                    ->label('En curso')
                    ->default(true),
            ])->columns(3),
            Section::make('Descripción')->schema([
                Textarea::make('description')
                    ->label('Descripción')
                    ->rows(3),
                TextInput::make('order')
                    ->label('Orden')
                    ->numeric()
                    ->default(0),
            ]),
        ]);
    }
}