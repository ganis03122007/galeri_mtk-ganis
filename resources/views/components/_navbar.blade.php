<!-- NAVBAR FULL LEBAR WARNA BIRU - TANPA FILTER -->
<nav id="Navbar" style="background: #1A3A6F; width: 100%; box-shadow: 0 2px 16px rgba(0,0,0,0.08);">
    
    <div style="max-width: 1130px; margin: 0 auto; padding: 12px 20px;">
        
        <div style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap;">
            
            <!-- Logo - FILTER DIHAPUS -->
            <a href="{{ route('home') }}" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
                <div>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="icon" style="width: 20px; height: 20px;" />
                </div>
                <span style="font-weight: bold; font-size: 14px; color: white; letter-spacing: -0.3px;">galeri matematika</span>
            </a>

            <!-- Menu -->
            <div style="display: flex; align-items: center; gap: 8px;">
                <a href="{{ route('home') }}#Galeri-Sekolah" style="color: white; text-decoration: none; font-size: 14px; padding: 8px 12px;">Galeri</a>
                <a href="{{ route('home') }}#Informasi-Terkini" style="color: white; text-decoration: none; font-size: 14px; padding: 8px 12px;">Informasi</a>
                <a href="{{ route('home') }}#Agenda-Sekolah" style="color: white; text-decoration: none; font-size: 14px; padding: 8px 12px;">Agenda</a>
                <a href="{{ route('home') }}#Peta-Sekolah" style="color: white; text-decoration: none; font-size: 14px; padding: 8px 12px;">Peta</a>
            </div>

        </div>

    </div>
</nav>