<?php

namespace App\Filament\Resources\Inquiries\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class InquiriesTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
             TextColumn::make('id')
                ->label('#')
                ->sortable(),
                
            TextColumn::make('name')
                ->label('Sender Name')
                ->searchable()
                ->sortable(),

            TextColumn::make('email')
                ->label('Email Address')
                ->searchable()
                ->copyable(), // Click karke email copy ho jayegi

            TextColumn::make('interest')
                ->label('Interested In')
                ->badge()
                ->color('info'),

            TextColumn::make('budget')
                ->label('Budget')
                ->money('usd'),

            TextColumn::make('created_at')
                ->label('Date Received')
                ->dateTime()
                ->sortable(),
        ]);
    }
}