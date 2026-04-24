<!DOCTYPE html>
<html lang="id">
<head>

@include('components._head')
</head>
<body class="font-[Poppins] bg-[#F9F9FC]" style="padding-bottom: 0;">

@include('components._navbar')


<!-- Galeri -->
@include('components._galeri')

    <!-- INFORMASI TERKINI & AGENDA SEKOLAH -->
    <section class="max-w-[1130px] mx-auto" style="margin-top: 72px;">
        <div class="flex" style="gap: 30px;">

        <!-- informasi terkini -->
        @include('components._informasi')

        <!-- agenda -->
        @include('components._agenda')

        </div>
    </section>

    <!-- PETA SEKOLAH -->
    @include('components._peta')

    <!-- FOOTER -->
    @include('components._footer')

    <!-- SCRIPTS -->
    @include('components._scripts')
  
</body>
</html>