<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Indonesia Digital - Galeri Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 bg-orange-500 rounded-xl flex items-center justify-center shadow-lg shadow-orange-200">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <span class="font-extrabold text-xl tracking-tight">SMKIndonesia <span class="text-orange-500">Digital</span></span>
                </div>

                <div class="hidden md:flex items-center space-x-10 text-[15px] font-semibold text-slate-600">
                    <a href="#" class="text-orange-500 underline decoration-2 underline-offset-8">Galeri</a>
                    <a href="#" class="hover:text-orange-500 transition-colors">Informasi</a>
                    <a href="#" class="hover:text-orange-500 transition-colors">Agenda</a>
                    <a href="#" class="hover:text-orange-500 transition-colors">Peta</a>
                    <a href="#" class="bg-orange-500 text-white px-8 py-2.5 rounded-full hover:bg-orange-600 transition-all shadow-lg shadow-orange-200">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-16">
        <div class="max-w-3xl mb-12">
            <div class="inline-flex items-center gap-2 bg-orange-50 border border-orange-100 text-orange-600 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-500"></span>
                </span>
                Galeri Sekolah
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                Dokumentasi Kegiatan <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">SMK Indonesia Digital</span>
            </h1>
            <p class="mt-6 text-lg text-slate-500 leading-relaxed">
                Kumpulan momen terbaik, inovasi, dan kreativitas siswa dalam membangun masa depan digital yang gemilang.
            </p>
        </div>

        <div class="relative group cursor-pointer">
            <div class="overflow-hidden rounded-[2.5rem] shadow-2xl border-4 border-white">
                <img 
                    src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=2070&auto=format&fit=crop" 
                    alt="Dokumentasi Sekolah" 
                    class="w-full h-[350px] md:h-[600px] object-cover transition-transform duration-700 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-60 transition-opacity group-hover:opacity-80"></div>
            </div>
            
            <div class="absolute bottom-8 left-8 right-8 md:bottom-12 md:left-12 bg-white/10 backdrop-blur-xl p-8 rounded-[2rem] border border-white/20 shadow-2xl max-w-xl">
                <div class="flex items-center gap-3 mb-3 text-orange-300 text-sm font-bold uppercase tracking-widest">
                    <span>Terbaru</span>
                    <span class="h-1 w-1 rounded-full bg-orange-300"></span>
                    <span>1 April 2026</span>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Turnamen E-Sport & Kreativitas Digital Siswa</h3>
                <p class="text-white/70 text-sm md:text-base leading-relaxed">Melihat antusiasme siswa dalam kompetisi teknologi tahunan yang melatih kerjasama tim dan strategi.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="relative rounded-3xl overflow-hidden h-80 group shadow-lg">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40 p-8 flex flex-col justify-end">
                    <h4 class="text-white font-bold text-xl">Workshop Robotik</h4>
                </div>
            </div>
            <div class="relative rounded-3xl overflow-hidden h-80 group shadow-lg">
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/40 p-8 flex flex-col justify-end">
                    <h4 class="text-white font-bold text-xl">Kunjungan Industri IT</h4>
                </div>
            </div>
        </div>
    </main>

</body>
</html>