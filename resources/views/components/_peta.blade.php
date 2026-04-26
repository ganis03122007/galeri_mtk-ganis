<!-- PETA SEKOLAH -->
<section id="Peta-Sekolah" class="max-w-[1130px] mx-auto" style="margin-top: 72px;">
    <div class="text-center" style="margin-bottom: 28px;">
        <span class="section-badge">Update</span>
        <h2 class="section-title">peta sekolah smk<br>al-hafidz</h2>
    </div>

    <div class="bg-white overflow-hidden flex" style="border-radius: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.04); border: 1px solid #EEF0F7;">
        
        <!-- BAGIAN SELENGKAPNYA - BACKGROUND ABU-ABU TUA -->
        <div class="flex flex-col justify-center" style="width: 40%; padding: 48px 40px; gap: 16px; background: #4B5563; border-radius: 24px 0 0 24px;">
            
            <h3 class="font-bold" style="font-size: 20px; color: white;">Selengkapnya</h3>
            
            <p style="font-size: 13px; line-height: 1.7; color: #E5E7EB;">
                Biar nggak bingung, kamu bisa langsung lihat lokasi sekolah kami di peta. Jadi lebih gampang buat datang ke sini!
            </p>
            
            @if($petaSekolah && $petaSekolah->fotos->isNotEmpty())
                <a href="{{ asset('storage/' . $petaSekolah->fotos->first()->file) }}" target="_blank" class="nav-cta" style="width: fit-content; margin-top: 8px; display: inline-flex; align-items: center; gap: 6px; background: white; color: #4B5563; padding: 8px 20px; border-radius: 30px; text-decoration: none; font-weight: 500;">
                    Lihat Peta HD ↗
                </a>
            @else
                <span style="display: inline-block; padding: 10px 20px; background: rgba(255,255,255,0.2); border-radius: 50px; font-size: 13px; width: fit-content; margin-top: 8px; color: white;">Segera Hadir</span>
            @endif
        </div>
        
        <!-- BAGIAN PETA -->
        <div style="width: 60%; height: 360px; border-radius: 16px; overflow: hidden;">
            <div id="map" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
</section>

<!-- CSS dan JS Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ⚠️ GANTI KOORDINAT DENGAN LOKASI SEKOLAH ASLI ANDA ⚠️
        var lokasiSekolah = [-6.636703,106.634168]; // [latitude, longitude]
        
        var mapContainer = document.getElementById('map');
        if (mapContainer) {
            var map = L.map('map').setView(lokasiSekolah, 17);
            
            L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://carto.com/attributions">CARTO</a>',
                subdomains: 'abcd',
                maxZoom: 19
            }).addTo(map);
            
            var marker = L.marker(lokasiSekolah).addTo(map);
            marker.bindPopup("<b>Sekolah Kami</b>").openPopup();
            
            marker.on('click', function() {
                window.open('https://www.google.com/maps/search/?api=1&query=' + lokasiSekolah[0] + ',' + lokasiSekolah[1], '_blank');
            });
        }
    });
</script>