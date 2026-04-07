<?php

namespace App\Filament\Resources\Fotos;

use App\Filament\Resources\Fotos\Pages\CreateFoto;
use App\Filament\Resources\Fotos\Pages\EditFoto;
use App\Filament\Resources\Fotos\Pages\ListFotos;
use App\Filament\Resources\Fotos\Schemas\FotoForm;
use App\Filament\Resources\Fotos\Tables\FotosTable;
use App\Models\Foto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FotoResource extends Resource
{
    protected static ?string $model = Foto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCamera;

    // ✅ PERBAIKAN DI SINI
    protected static string|UnitEnum|null $navigationGroup = 'Konten';

    protected static ?string $recordTitleAttribute = 'Foto';

    public static function form(Schema $schema): Schema
    {
        return FotoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FotosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFotos::route('/'),
            'create' => CreateFoto::route('/create'),
            'edit' => EditFoto::route('/{record}/edit'),
        ];
    }
}