<?php

namespace App\Filament\Resources\Pricings\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class PricingForm
{
    public static function configure(Schema $schema): Schema
    {
        // Yahan $form ki jagah $schema likhein kyunke upar wahi pass ho raha hai
        return $schema->components([
            Forms\Components\TextInput::make('name')
                ->required(),

            Forms\Components\TextInput::make('price')
                ->prefix('$')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->required(),

            Forms\Components\TagsInput::make('features')
                ->required(),

            Forms\Components\Toggle::make('is_featured'),
        ]);
    }
}