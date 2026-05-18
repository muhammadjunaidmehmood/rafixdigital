<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
         return $schema->components([
        \Filament\Forms\Components\TextInput::make('title')->required(),
        \Filament\Forms\Components\Textarea::make('sub_text'),
        \Filament\Forms\Components\TextInput::make('button_text'),
        \Filament\Forms\Components\FileUpload::make('image_path')->image(),
    ]);
    }
}