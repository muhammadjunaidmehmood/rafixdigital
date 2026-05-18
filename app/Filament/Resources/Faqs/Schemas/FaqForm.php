<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms;           // <--- Ye line lazmi add karein
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('question')
                ->required(),
                
            Forms\Components\Textarea::make('answer')
                ->required(),
                
            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),
        ]);
    }
}