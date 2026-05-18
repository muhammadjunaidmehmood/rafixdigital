<?php

namespace App\Filament\Resources\Heroes\Tables;

use Filament\Tables;
use Filament\Tables\Table;

class HeroesTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image_path')
                ->label('Preview')
                ->circular(),

            Tables\Columns\TextColumn::make('title')
                ->label('Title')
                ->searchable()
                ->limit(50),

            Tables\Columns\TextColumn::make('button_text')
                ->label('Button Text'),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Added On')
                ->dateTime()
                ->sortable(),
        ]);
    }
}