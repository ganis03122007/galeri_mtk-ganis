<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Galery;

class HomeController extends Controller
{
    public function beranda()
    {
        $posts = Post::where('status', 'published')
            ->with(['kategori', 'user', 'galery.fotos'])
            ->latest()
            ->take(6)
            ->get();

        $galeries = Galery::whereHas('fotos')
            ->with(['fotos', 'post.user', 'post.kategori'])
            ->where('status', true)
            ->latest()
            ->take(5)
            ->get();

        $petaSekolah = Galery::whereHas('post.kategori', function ($query) {
            $query->where('judul', 'Peta Sekolah');
        })
        ->with(['fotos', 'post'])
        ->latest()
        ->first();

        return view('beranda', compact('posts', 'galeries', 'petaSekolah'));
    }

    public function show(Post $post)
    {
        if ($post->status !== 'published') {
            abort(404);
        }

        $post->load(['kategori', 'user', 'galery.fotos']);

        $allPhotos = collect();
        foreach ($post->galery as $galery) {
            $allPhotos = $allPhotos->merge($galery->fotos);
        }

        $heroImage = $allPhotos->first()?->file;

        $relatedPosts = Post::where('status', 'published')
            ->where('id', '!=', $post->id)
            ->whereHas('kategori', function ($query) {
                $query->where('judul', '!=', 'Peta Sekolah');
            } )
            ->with(['kategori', 'user', 'galery.fotos'])
            ->latest()
            ->take(4)
            ->get();
            
        return view('post-detail', compact('post', 'allPhotos', 'heroImage', 'relatedPosts'));
    }
    
}