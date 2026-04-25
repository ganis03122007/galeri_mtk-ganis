@extends('beranda') 
{{-- 
    CATATAN: Jika nanti tampilan halaman ini malah double (ada beranda di dalam beranda), 
    ganti tulisan 'beranda' di atas menjadi 'layout' atau 'master' 
    sesuai baris pertama yang ada di file beranda.blade.php kamu.
--}}

@section('content')
<div style="background: #F8FAFC; min-height: 100vh; padding: 60px 0;">
    <div class="container mx-auto" style="max-width: 1130px; padding: 0 20px;">
        
        <div style="text-align: center; margin-bottom: 50px;">
            <span style="background: #FFF0E5; color: #FF7A00; padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 600;">ARSIP INFORMASI</span>
            <h1 style="font-size: 32px; font-weight: 800; margin-top: 12px; color: #1A1D26;">Semua Berita & Prestasi</h1>
            <div style="width: 60px; height: 4px; background: #FF7A00; margin: 20px auto; border-radius: 10px;"></div>
        </div>

        <div style="display: flex; flex-wrap: wrap; gap: 24px;">
            @forelse($posts as $post)
                @php
                    $thumbnail = null;
                    if ($post->galeries->isNotEmpty() && $post->galeries->first()->fotos->isNotEmpty()) {
                        $thumbnail = $post->galeries->first()->fotos->first()->file;
                    }
                @endphp
                
                <div style="flex: 1 1 calc(33.333% - 16px); min-width: 300px; max-width: calc(33.333% - 16px);">
                    <a href="{{ route('post.show', $post) }}" style="text-decoration: none; color: inherit;">
                        <div style="background: white; border-radius: 20px; border: 1px solid #EEF0F7; overflow: hidden; height: 100%; transition: transform 0.3s ease; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02);">
                            <div style="height: 200px; overflow: hidden; background: #f0f0f0;">
                                <img src="{{ $thumbnail ? asset('storage/' . $thumbnail) : asset('assets/images/thumbnails/th-building.png') }}" 
                                     style="width: 100%; height: 100%; object-fit: cover;" />
                            </div>
                            <div style="padding: 20px;">
                                <span style="color: #FF7A00; font-size: 11px; font-weight: 700; text-transform: uppercase;">{{ $post->kategori->judul ?? 'Informasi' }}</span>
                                <h3 style="font-size: 16px; font-weight: 700; margin: 10px 0; color: #1A1D26; line-height: 1.5;">{{ $post->judul }}</h3>
                                <p style="color: #A3A6AE; font-size: 13px; margin: 0;">{{ $post->created_at->translatedFormat('d M, Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div style="width: 100%; text-align: center; padding: 100px 0; color: #A3A6AE;">
                    Belum ada postingan yang tersedia.
                </div>
            @endforelse
        </div>

        <div style="text-align: center; margin-top: 60px;">
            <a href="{{ url('/') }}" style="display: inline-block; padding: 12px 30px; background: white; border: 1px solid #EEF0F7; border-radius: 50px; text-decoration: none; color: #1A1D26; font-weight: 600; font-size: 14px;">
                ← Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection