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
        color: #ffffff;
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
        gap: 10px;
    }
    .footer-custom-social-icon {
        width: 32px;
        height: 32px;
        background-color: #ffffff;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.2s;
    }
    .footer-custom-social-icon:hover {
        background-color: #e5e7eb;
    }
    .footer-custom-social-icon svg {
        width: 16px;
        height: 16px;
        fill: currentColor;
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
                        <img src="{{ asset('assets/images/icons/logo.png') }}" alt="icon" style="width: 20px; height: 20px;" />
                    </div>
                    <span class="footer-custom-logo-text"><span style="color: #3b82f6;">G</span>aleri Mtk</span>
                </div>
                <!-- lorem ipsum-style summary -->
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
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Galeri</a></li>
                    <li><a href="#">Portofolio</a></li>
                    <li><a href="#">Tentang Kami</a></li>
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
                    <li><a href="#">Korporat</a></li>
                </ul>
            </div>

            <!-- Column 4: Others (Social Media) -->
            <div style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                <div>
                    <h3 class="footer-custom-title">Others</h3>
                    <p class="footer-custom-social-title">Follow us on Social Media</p>
                    <div class="footer-custom-social-icons">
                        <a href="#" class="footer-custom-social-icon" style="color: #3b5998;">
                            <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="footer-custom-social-icon" style="color: #e1306c;">
                            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" class="footer-custom-social-icon" style="color: #1da1f2;">
                            <svg viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="footer-custom-social-icon" style="color: #ff0000;">
                            <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <a href="#" class="footer-custom-social-icon" style="color: #0a66c2;">
                            <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.603 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="footer-custom-lang">
                    <span>Indonesia</span>
                </div>
            </div>
        </div>
    </div>
</footer>