<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostsResource;
use App\Models\Galery;
use App\Models\Foto;
use Filament\Resources\Pages\CreateRecord;

class CreatePosts extends CreateRecord
{
    protected static string $resource = PostsResource::class;
    protected function afterCreate(): void
    {
    $photos = $this->data['photos'] ?? [];

    if (!empty($photos)) {
    $galery = Galery::create([
    'post_id' => $this->record->id,
    'position' => 1,
    'status' => true,
    ]);

    // Buat record foto untuk setiap file
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