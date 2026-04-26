@extends('beranda')

@section('content')
<div style="background: #fef9e8; min-height: 100vh; padding: 60px 0;">
    <div class="container mx-auto" style="max-width: 1130px; padding: 0 20px;">
        
        <!-- TOMBOL KEMBALI KE BERANDA -->
        <div style="margin-bottom: 30px;">
            <a href="{{ route('home') }}" style="display: inline-flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; color: #6B7280; padding: 10px 20px; background: white; border-radius: 50px; border: 1px solid #E5E7EB; transition: all 0.3s ease; text-decoration: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5"/><path d="m12 19-7-7 7-7"/>
                </svg>
                Kembali ke Beranda
            </a>
        </div>
        
        <!-- HEADER SECTION -->
        <div style="text-align: center; margin-bottom: 50px;">
            <span style="background: #E0F2FE; color: #1E3A5F; padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 600;">ARSIP INFORMASI</span>
            <h1 style="font-size: 32px; font-weight: 800; margin-top: 12px; color: #1A1D26;">Semua materi dan pembelajaran</h1>
            <div style="width: 60px; height: 4px; background: #6B7280; margin: 20px auto; border-radius: 10px;"></div>
        </div>

        <!-- GRID POSTS -->
        <div style="display: flex; flex-wrap: wrap; gap: 24px;">
            @forelse($posts as $post)
                @php
                    $thumbnail = null;
                    if ($post->galeries->isNotEmpty()) {
                        $firstGalery = $post->galeries->first();
                        if ($firstGalery->fotos->isNotEmpty()) {
                            $thumbnail = $firstGalery->fotos->first()->file;
                        }
                    }
                @endphp
                
                <div style="flex: 1 1 calc(33.333% - 16px); min-width: 280px; max-width: calc(33.333% - 16px);">
                    <a href="{{ route('post.show', $post) }}" style="text-decoration: none; color: inherit; display: block;">
                        <!-- GRADASI BIRU SOFT -->
                        <div style="background: linear-gradient(135deg, #E0F2FE 0%, #BAE6FD 100%); border-radius: 20px; border: 1px solid #E5E7EB; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;">
                            
                            <!-- THUMBNAIL -->
                            <div style="height: 180px; overflow: hidden;">
                                @if($thumbnail)
                                    <img src="{{ asset('storage/' . $thumbnail) }}" alt="{{ $post->judul }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                                @else
                                    <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #E0F2FE, #BAE6FD); display: flex; align-items: center; justify-content: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1E3A5F" stroke-width="1.5"><rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- CONTENT -->
                            <div style="padding: 20px;">
                                <span style="background: #6B7280; color: white; padding: 4px 12px; border-radius: 50px; font-size: 10px; font-weight: 700; display: inline-block;">
                                    {{ strtoupper($post->kategori->judul ?? 'BERITA') }}
                                </span>
                                <h3 style="font-size: 16px; font-weight: 700; color: #1E3A5F; margin-top: 12px; margin-bottom: 8px; line-height: 1.4;">
                                    {{ $post->judul }}
                                </h3>
                                <p style="font-size: 12px; color: #475569; margin: 0;">
                                    {{ $post->created_at->translatedFormat('d M, Y') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div style="text-align: center; width: 100%; padding: 60px; background: #F3F4F6; border-radius: 20px; color: #6B7280;">
                    Belum ada postingan. Silakan tambahkan melalui dashboard.
                </div>
            @endforelse
        </div>

        <!-- PAGINATION -->
        @if(method_exists($posts, 'links'))
            <div style="margin-top: 50px; display: flex; justify-content: center;">
                {{ $posts->links() }}
            </div>
        @endif

    </div>
</div>
@endsection