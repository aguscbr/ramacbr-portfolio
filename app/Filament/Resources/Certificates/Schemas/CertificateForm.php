<?php

namespace App\Filament\Resources\Certificates\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CertificateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Certificado')->schema([
                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                TextInput::make('issuer')
                    ->label('Emisor')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('issued_at')
                    ->label('Fecha de emisión')
                    ->required(),
                TextInput::make('credential_url')
                    ->label('URL del certificado')
                    ->url(),
                TextInput::make('order')
                    ->label('Orden')
                    ->numeric()
                    ->default(0),
            ]),
            Section::make('Imagen')->schema([
                FileUpload::make('image')
                    ->label('Imagen del certificado')
                    ->image()
                    ->disk('public')
                    ->directory('certificates'),
            ]),
        ]);
    }
}
