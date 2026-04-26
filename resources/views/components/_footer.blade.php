<style>
    .footer-custom-bg {
        background-color: #0b1121;
        color: #9ca3af;
        padding-top: 64px;
        padding-bottom: 64px;
        margin-top: 80px;
        font-family: inherit;
    }
    .footer-custom-container {
        max-width: 1130px;
        margin: 0 auto;
        padding-left: 16px;
        padding-right: 16px;
        display: flex;
        flex-direction: column;
        gap: 48px;
    }
    .footer-custom-grid {
        display: flex;
        flex-direction: column;
        gap: 48px;
    }
    .footer-custom-col-1 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer-custom-title {
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 24px;
        border-left: 3px solid #3b82f6;
        padding-left: 12px;
        font-size: 14px;
    }
    .footer-custom-logo {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 24px;
    }
    .footer-custom-logo-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #FF6B18;
        color: #ffffff;
        width: 30px;
        height: 30px;
        border-radius: 6px;
    }
    .footer-custom-logo-text {
        font-weight: 700;
        color: #ffffff;
        font-size: 24px;
        letter-spacing: 0.025em;
    }
    .footer-custom-text {
        font-size: 13px;
        line-height: 1.8;
        color: #d1d5db;
        margin-bottom: 32px;
    }
    .footer-custom-copyright {
        font-size: 13px;
        font-weight: 500;
        color: #9ca3af;
    }
    .footer-custom-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
        font-size: 13px;
        font-weight: 500;
        color: #9ca3af;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .footer-custom-list a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s;
    }
    .footer-custom-list a:hover {
        color: #ffffff;
    }
    .footer-custom-social-title {
        font-size: 13px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
    }
    .footer-custom-social-icons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }
    .footer-custom-social-icon {
        width: 36px;
        height: 36px;
        background-color: #1e293b;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    .footer-custom-social-icon:hover {
        transform: translateY(-3px);
        background-color: #3b82f6;
    }
    .footer-custom-social-icon svg {
        width: 18px;
        height: 18px;
        fill: #ffffff;
    }
    .footer-custom-lang {
        display: flex;
        justify-content: flex-start;
        margin-top: 48px;
    }
    .footer-custom-lang span {
        font-size: 13px;
        font-weight: 700;
        color: #ffffff;
    }
    
    @media (min-width: 640px) {
        .footer-custom-grid {
            flex-direction: row;
            gap: 64px;
        }
    }
    @media (min-width: 1024px) {
        .footer-custom-container {
            flex-direction: row;
            justify-content: space-between;
            gap: 32px;
        }
        .footer-custom-col-1 {
            max-width: 320px;
        }
        .footer-custom-grid {
            gap: 80px;
        }
        .footer-custom-text {
            margin-bottom: 64px;
        }
        .footer-custom-lang {
            justify-content: flex-end;
            margin-top: auto;
        }
    }
</style>

<!-- FOOTER -->
<footer class="footer-custom-bg">
    <div class="footer-custom-container">
        
        <!-- Column 1 -->
        <div class="footer-custom-col-1">
            <div>
                <div class="footer-custom-logo">
                    <div>
                       <img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="width: 35px; height: 35px; object-fit: contain;" />
                    </div>
                    <span class="footer-custom-logo-text"><span style="color: #3b82f6;">G</span>aleri Mtk</span>
                </div>
                <p class="footer-custom-text">
                    Platform khusus untuk mendokumentasikan dan membagikan alat peraga, media pembelajaran, dan kegiatan seputar matematika. Menyediakan wadah kolaboratif yang interaktif dan informatif.
                </p>
            </div>
            <p class="footer-custom-copyright">&copy; {{ date('Y') }} Galeri MTK Ganis. All Rights reserved.</p>
        </div>

        <div class="footer-custom-grid">
            <!-- Column 2: Links -->
            <div>
                <h3 class="footer-custom-title">Links</h3>
                <ul class="footer-custom-list">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('home') }}#Galeri-Sekolah">Galeri</a></li>
                    <li><a href="{{ route('home') }}#Informasi-Terkini">Informasi</a></li>
                    <li><a href="{{ route('home') }}#Agenda-Sekolah">Agenda</a></li>
                    <li><a href="{{ route('home') }}#Peta-Sekolah">Peta</a></li>
                </ul>
            </div>

            <!-- Column 3: Others -->
            <div>
                <h3 class="footer-custom-title">Others</h3>
                <ul class="footer-custom-list">
                    <li><a href="#">Syarat &amp; Ketentuan</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Pusat Bantuan</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Column 4: Social Media -->
            <div style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                <div>
                    <h3 class="footer-custom-title">Follow Us</h3>
                    <p class="footer-custom-social-title">Follow us on Social Media</p>
                    <div class="footer-custom-social-icons">
                        <!-- Facebook -->
                        <a href="https://facebook.com/akun_kamu" target="_blank" rel="noopener noreferrer" class="footer-custom-social-icon">
                            <svg viewBox="0 0 24 24" fill="white">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com/ohlol.nisniss" target="_blank" rel="noopener noreferrer" class="footer-custom-social-icon">
                            <svg viewBox="0 0 24 24" fill="white">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8z"/>
                            </svg>
                        </a>
                        <!-- Twitter/X -->
                        <a href="https://twitter.com/akun_kamu" target="_blank" rel="noopener noreferrer" class="footer-custom-social-icon">
                            <svg viewBox="0 0 24 24" fill="white">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://youtube.com/@akun_kamu" target="_blank" rel="noopener noreferrer" class="footer-custom-social-icon">
                            <svg viewBox="0 0 24 24" fill="white">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://tiktok.com/@" target="_blank" rel="noopener noreferrer" class="footer-custom-social-icon">
                            <svg viewBox="0 0 24 24" fill="white">
                                <path d="M19.589 6.686a4.993 4.993 0 0 1-3.77-4.665V2h-3.445v13.672a2.945 2.945 0 0 1-5.897 1.286 2.943 2.943 0 0 1 1.034-1.974c.552-.456 1.255-.7 1.978-.686V9.33c-3.877 0-7.039 3.162-7.039 7.039 0 2.623 1.44 4.927 3.568 6.182a6.969 6.969 0 0 0 3.471.857 7.031 7.031 0 0 0 3.696-1.006c1.48-.86 2.645-2.136 3.346-3.678a7.007 7.007 0 0 0 .498-2.657V11.37c.977.7 2.117 1.081 3.291 1.081V8.924c-1.983 0-3.646-1.216-4.461-2.238z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer-custom-lang">
        
                </div>
            </div>
        </div>
    </div>
</footer>