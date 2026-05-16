<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Skill')->schema([
                TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255),
                Select::make('category')
                    ->label('Categoría')
                    ->required()
                    ->options([
                        'Backend' => 'Backend',
                        'Frontend' => 'Frontend',
                        'DevOps' => 'DevOps',
                        'Bases de datos' => 'Bases de datos',
                    ]),
                TextInput::make('icon')
                    ->label('Icono')
                    ->placeholder('ej: laravel, vuejs, mysql')
                    ->maxLength(255),
                TextInput::make('order')
                    ->label('Orden')
                    ->numeric()
                    ->default(0),
            ]),
        ]);
    }
}
