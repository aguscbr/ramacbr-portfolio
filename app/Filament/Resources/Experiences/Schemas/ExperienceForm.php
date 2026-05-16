<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Empresa')->schema([
                TextInput::make('role')
                    ->label('Rol')
                    ->required()
                    ->maxLength(255),
                TextInput::make('company')
                    ->label('Empresa')
                    ->required()
                    ->maxLength(255),
                TextInput::make('location')
                    ->label('Ubicación')
                    ->maxLength(255),
            ]),
            Section::make('Período')->schema([
                DatePicker::make('start_date')
                    ->label('Fecha de inicio')
                    ->required(),
                DatePicker::make('end_date')
                    ->label('Fecha de fin'),
                Toggle::make('current')
                    ->label('Trabajo actual')
                    ->default(false),
            ])->columns(3),
            Section::make('Descripción')->schema([
                Textarea::make('description')
                    ->label('Descripción')
                    ->required()
                    ->rows(4),
            ]),
        ]);
    }
}
