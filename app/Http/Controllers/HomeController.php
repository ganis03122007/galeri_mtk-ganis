<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Galery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Halaman Beranda
     */
    public function beranda()
    {
        $posts = Post::where('status', 'published')
            ->with(['kategori', 'user', 'galeries.fotos'])
            ->latest()
            ->take(6)
            ->get();

        $galeries = $this->getSharedGaleries();
        $petaSekolah = $this->getSharedPeta();

        return view('beranda', compact('posts', 'galeries', 'petaSekolah'));
    }

    /**
     * Halaman Semua Postingan (Daftar Berita)
     */
    public function semuaPostingan()
    {
        $posts = Post::where('status', 'published')
            ->with(['kategori', 'user', 'galeries.fotos'])
            ->latest()
            ->paginate(9);

        // Tambahkan ini agar komponen galeri dan peta tidak error
        $galeries = $this->getSharedGaleries();
        $petaSekolah = $this->getSharedPeta();

        return view('post-index', compact('posts', 'galeries', 'petaSekolah'));
    }

    /**
     * Halaman Detail Postingan
     */
    public function show(Post $post)
    {
        if ($post->status !== 'published') {
            abort(404);
        }

        $post->load(['kategori', 'user', 'galeries.fotos']);

        // Tambahkan ini agar sidebar/footer yang memuat galeri & peta tidak error
        $galeries = $this->getSharedGaleries();
        $petaSekolah = $this->getSharedPeta();

        $allPhotos = collect();
        foreach ($post->galeries as $galery) {
            $allPhotos = $allPhotos->merge($galery->fotos);
        }

        $heroImage = $allPhotos->first()?->file;

        $relatedPosts = Post::where('status', 'published')
            ->where('id', '!=', $post->id)
            ->whereHas('kategori', function ($query) {
                $query->where('judul', '!=', 'Peta Sekolah');
            })
            ->with(['kategori', 'user', 'galeries.fotos'])
            ->latest()
            ->take(4)
            ->get();
            
        return view('post-detail', compact('post', 'allPhotos', 'heroImage', 'relatedPosts', 'galeries', 'petaSekolah'));
    }

    /**
     * Private Method untuk mengambil data Galeri (Shared)
     */
    private function getSharedGaleries()
    {
        return Galery::whereHas('fotos')
            ->with(['fotos', 'post.user', 'post.kategori'])
            ->where('status', true)
            ->latest()
            ->take(5)
            ->get();
    }

    /**
     * Private Method untuk mengambil data Peta Sekolah (Shared)
     */
    private function getSharedPeta()
    {
        return Galery::whereHas('post.kategori', function ($query) {
                $query->where('judul', 'Peta Sekolah');
            })
            ->with(['fotos', 'post'])
            ->latest()
            ->first();
    }
}