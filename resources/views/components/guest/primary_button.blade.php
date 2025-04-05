<a href="{{ $link }}"
    class="text-base inline-flex items-center px-10 text-white font-semibold transition-colors bg-no-repeat"
    style="background-image: url('{{ asset('assets/button-bg.svg') }}'); background-position: right bottom; height: 56px; font-style: normal; font-weight: 600;">
    {{ $slot }}
</a>
