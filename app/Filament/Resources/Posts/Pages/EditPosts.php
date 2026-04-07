<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostsResource;
use App\Models\Galery;
use App\Models\Foto;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPosts extends EditRecord
{
    protected static string $resource = PostsResource::class;
    protected function getHeaderActions(): array
    {
    return [
    DeleteAction::make(),
    ];
    }

    protected function afterSave(): void
    {
    $photos = $this->data['photos'] ?? [];
    if (!empty($photos)) {
    // Gunakan galeri yang sudah ada, atau buat baru
    $galery = Galery::firstOrCreate(
    ['post_id' => $this->record->id],
    ['position' => 1, 'status' => true]
    );

    // Buat record foto untuk setiap file baru
    foreach ($photos as $photo) {
    Foto::create([
    'galery_id' => $galery->id,
    'file' => $photo,
    'judul' => null,
    ]);
    }
    }
    }
}