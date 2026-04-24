<!-- NAVBAR MINIMALIS - SEMUA RATA TENGAH (logo + menu) -->
<nav id="Navbar" class="max-w-[1130px] mx-auto bg-white rounded-full" style="margin-top: 20px; padding: 10px 20px; box-shadow: 0 2px 16px rgba(0,0,0,0.04);">
    
    <!-- Flex dengan justify center -->
    <div style="display: flex; justify-content: center; align-items: center; gap: 30px; flex-wrap: wrap;">
        
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center" style="gap: 10px;">
            <div>
                <img src="{{ asset('assets/images/logo.png') }}" alt="icon" style="width: 18px; height: 18px;" />
            </div>
            <span class="font-bold" style="font-size: 14px; color: #1A1D26; letter-spacing: -0.3px;">galeri matematika</span>
        </a>

        <!-- Menu -->
        <div class="flex items-center" style="gap: 4px;">
            <a href="{{ route('home') }}#Galeri-Sekolah" class="nav-link">Galeri</a>
            <a href="{{ route('home') }}#Informasi-Terkini" class="nav-link">Informasi</a>
            <a href="{{ route('home') }}#Agenda-Sekolah" class="nav-link">Agenda</a>
            <a href="{{ route('home') }}#Peta-Sekolah" class="nav-link">Peta</a>
            <div style="width: 1px; height: 20px; background: #E8EBF4; margin: 0 8px;"></div>
        </div>

    </div>
</nav>