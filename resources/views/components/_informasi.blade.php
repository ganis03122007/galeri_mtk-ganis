<!-- INFORMASI TERKINI -->

<!-- INFORMASI TERKINI (DINAMIS DARI POSTS) -->
<div id="Informasi-Terkini" class="flex flex-col" style="gap: 24px; width: 66.6%;">
    <div class="flex justify-between items-end">
        <div>
            <span class="section-badge" style="text-align: left;">INFORMASI TERKINI</span>
            <h2 class="section-title" style="text-align: left; font-size: 22px; margin-top: 6px;">Berita & Prestasi Terbaru</h2>
        </div>
        {{-- UBAH: Link "Lihat Semua" mengarah ke route semua.postingan --}}
        <a href="{{ route('post.index') }}" class="font-semibold text-[#6B7280] text-sm hover:underline transition-all hover:gap-2 flex items-center">
            Lihat Semua <span class="ml-1">→</span>
        </a>
    </div>

    <div class="flex" style="gap: 20px;">
        @forelse($posts->take(2) as $post)
            @php
                // Ambil foto pertama dari galeri pertama post ini
                $thumbnail = null;
                if ($post->galeries->isNotEmpty()) {
                    $firstGalery = $post->galeries->first();
                    if ($firstGalery->fotos->isNotEmpty()) {
                        $thumbnail = $firstGalery->fotos->first()->file;
                    }
                }
            @endphp
            <a href="{{ route('post.show', $post) }}" class="card-news" style="width: 50%;">
                <div class="news-card-inner" style="background: linear-gradient(135deg, #BFDBFE 0%, #93C5FD 100%); border-radius: 16px; overflow: hidden; transition: transform 0.3s ease; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
                    <div class="news-thumb">
                        <span class="card-badge" style="background: #6B7280; color: white;">{{ strtoupper($post->kategori->judul ?? 'BERITA') }}</span>
                        @if($thumbnail)
                            <img src="{{ asset('storage/' . $thumbnail) }}" class="object-cover w-full h-full news-img" alt="{{ $post->judul }}" />
                        @else
                            <img src="{{ asset('assets/images/thumbnails/th-building.png') }}" class="object-cover w-full h-full news-img" alt="{{ $post->judul }}" />
                        @endif
                    </div>
                    <div class="flex flex-col" style="gap: 6px; padding: 16px;">
                        <h3 class="font-bold" style="font-size: 14px; line-height: 1.5; color: #1E3A5F;">{{ $post->judul }}</h3>
                        <p class="text-[#475569]" style="font-size: 12px; margin-top: auto;">{{ $post->created_at->translatedFormat('d M, Y') }}</p>
                    </div>
                </div>
            </a>
        @empty
            <!-- Fallback jika belum ada post -->
            <div class="flex items-center justify-center w-full text-[#6B7280] font-medium" style="padding: 60px 0; background: #F1F5F9; border-radius: 16px;">
                Belum ada informasi — Tambahkan post via Dashboard
            </div>
        @endforelse
    </div>
</div>