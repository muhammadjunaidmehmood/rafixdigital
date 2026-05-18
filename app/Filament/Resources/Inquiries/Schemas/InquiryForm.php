<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Customer Information')
                ->schema([
                    TextInput::make('name')->disabled(),
                    TextInput::make('email')->disabled(),
                ])->columns(2),

            Section::make('Project Details')
                ->schema([
                    TextInput::make('interest')
                        ->label('Service Interested In')
                        ->disabled(),
                    TextInput::make('budget')
                        ->disabled(),
                    Textarea::make('message')
                        ->label('Project Details / Message')
                        ->rows(5)
                        ->disabled(),
                ]),
        ]);
    }
}