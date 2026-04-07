<?php

namespace App\Filament\Resources\Fotos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FotosTable
{
    public static function configure(Table $table): Table
    {
    return $table
    ->columns([
    ImageColumn::make('file')
    ->disk('public'),
    TextColumn::make('galery.post.judul')
    ->label('Judul')
    ->formatStateUsing(function ($state, $record) {
    $postJdul = $record->galery->post->judul ?? 'Tanpa Posts';
    $fotoNumber = $record->id;
    return "Gambar {$fotoNumber} {$postJdul}";
    })
    ->searchable(),
    TextColumn::make('created_at')
    ->dateTime()
    ->sortable()
    ->toggleable(isToggledHiddenByDefault: true),
    TextColumn::make('updated_at')
    ->dateTime()
    ->sortable()
    ->toggleable(isToggledHiddenByDefault: true),
    ])
    ->filters([
    // ...
    ])
    ->recordActions([
    EditAction::make(),
    ])
    ->toolbarActions([
    BulkActionGroup::make([
    DeleteBulkAction::make(),
    ]),
    ]);
    }
}