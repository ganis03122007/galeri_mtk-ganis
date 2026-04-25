<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('output.css') }}" rel="stylesheet" />
    <link href="{{ asset('main.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body style="font-family: 'Poppins', sans-serif; background:#F8F9FC;">

@include('components._navbar')

<!-- HEADER / HERO -->
<div style="
    background: linear-gradient(135deg, #8C5A3C 0%, #5A3A2A 100%);
    padding: 100px 20px 80px;
    position: relative;
    overflow: hidden;
">

    <!-- blur dekor -->
    <div style="
        position:absolute;
        top:-60px;
        right:-60px;
        width:300px;
        height:300px;
        background:rgba(255,255,255,0.08);
        border-radius:50%;
        filter:blur(80px);
    "></div>

    <div style="
        max-width:800px;
        margin:auto;
        text-align:center;
        position:relative;
        z-index:2;
        color:white;
    ">
        <span style="
            background:rgba(255,255,255,0.15);
            color:#FFE8D9;
            padding:6px 18px;
            border-radius:50px;
            font-size:12px;
            font-weight:600;
            letter-spacing:1px;
        ">
            ARSIP INFORMASI
        </span>

        <h1 style="
            font-size:40px;
            font-weight:800;
            margin-top:16px;
        ">
            Semua Berita & Prestasi
        </h1>

        <p style="
            margin-top:12px;
            font-size:15px;
            color:#F3D9C8;
        ">
            Kumpulan informasi terbaru, berita kegiatan, dan pencapaian terbaik kami
        </p>
    </div>
</div>

<!-- CONTENT -->
<div style="padding: 60px 0; margin-top:-40px;">
    <div class="container mx-auto" style="max-width: 1130px; padding: 0 20px;">

        <div style="display: flex; flex-wrap: wrap; gap: 24px;">
            @forelse($posts as $post)
                @php
                    $thumbnail = null;
                    if ($post->galeries->isNotEmpty() && $post->galeries->first()->fotos->isNotEmpty()) {
                        $thumbnail = $post->galeries->first()->fotos->first()->file;
                    }
                @endphp

                <div style="flex: 1 1 calc(33.333% - 16px); min-width: 300px;">
                    <a href="{{ route('post.show', $post) }}" style="text-decoration: none; color: inherit;">
                        <div 
                            style="
                                background: white;
                                border-radius: 20px;
                                border: 1px solid #EEF0F7;
                                overflow: hidden;
                                height: 100%;
                                transition: 0.3s;
                                box-shadow: 0 4px 6px rgba(0,0,0,0.05);
                            "
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 12px 24px rgba(0,0,0,0.1)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.05)'"
                        >
                            <div style="height: 200px; overflow: hidden;">
                                <img 
                                    src="{{ $thumbnail ? asset('storage/' . $thumbnail) : asset('assets/images/thumbnails/th-building.png') }}" 
                                    style="width: 100%; height: 100%; object-fit: cover;" 
                                />
                            </div>

                            <div style="padding: 20px;">
                                <span style="
                                    color: #8C5A3C;
                                    font-size: 11px;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                ">
                                    {{ $post->kategori->judul ?? 'Berita' }}
                                </span>

                                <h3 style="
                                    font-size: 16px;
                                    font-weight: 700;
                                    margin: 8px 0;
                                    color: #1A1D26;
                                ">
                                    {{ $post->judul }}
                                </h3>

                                <p style="
                                    color: #A3A6AE;
                                    font-size: 13px;
                                ">
                                    {{ $post->created_at->translatedFormat('d M, Y') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            @empty
                <div style="width: 100%; text-align: center; padding: 40px;">
                    <p style="color: #A3A6AE;">Belum ada postingan.</p>
                </div>
            @endforelse
        </div>

        <hr style="margin: 60px 0 40px; border: 0; border-top: 1px solid #EEF0F7;">

        <div style="text-align: center;">
            <a href="{{ url('/') }}" style="
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: #1A1D26;
                color: white;
                padding: 12px 32px;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 600;
                transition: 0.3s;
                font-size: 15px;
            ">
                <span>←</span> Kembali ke Beranda
            </a>
        </div>

    </div>
</div>

@include('components._footer')

</body>
</html>