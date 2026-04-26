<!DOCTYPE html>
<html lang="id">
<head>

@include('components._head')
</head>
<body class="font-[Poppins] bg-[#F9F9FC]" style="padding-bottom: 0;">

@include('components._navbar')


@if(Request::is('/'))
    @include('components._galeri')

    <section class="max-w-[1130px] mx-auto" style="margin-top: 72px;">
        <div class="flex" style="gap: 30px;">
            @include('components._informasi')
            @include('components._agenda')
        </div>
    </section>

    @include('components._peta')
@endif

<div class="py-12">
    @yield('content')
</div>
    <!-- FOOTER -->
    @include('components._footer')

    <!-- SCRIPTS -->
    @include('components._scripts')
  
</body>
</html>