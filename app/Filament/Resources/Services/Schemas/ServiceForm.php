<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
         return $schema->components([
        Forms\Components\TextInput::make('title')->required(),
        Forms\Components\Textarea::make('description')->required(),
        Forms\Components\FileUpload::make('image')->directory('services')->image(),
        Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
    ]);
    }
}
