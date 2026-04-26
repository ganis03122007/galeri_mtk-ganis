<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- GANTI: Pakai Flickity lokal (offline) -->
<script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>

<script>
    $(document).ready(function() {
        // Cek apakah Flickity tersedia
        if (typeof $.fn.flickity !== 'undefined') {
            $('.main-carousel').flickity({
                cellAlign: 'left',
                contain: true,
                prevNextButtons: false,
                pageDots: false,
                autoPlay: 4000,
                wrapAround: true
            });
            
            var $carousel = $('.main-carousel').flickity();
            
            $('.button--previous').on('click', function() { 
                $carousel.flickity('previous'); 
            });
            
            $('.button--next').on('click', function() { 
                $carousel.flickity('next'); 
            });
        } else {
            console.log('Flickity tidak tersedia, gunakan fallback');
        }
    });
</script>