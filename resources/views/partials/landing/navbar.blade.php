{{-- ═══════════════════════════════════════════════ --}}
{{-- HEADER / NAVBAR --}}
{{-- ═══════════════════════════════════════════════ --}}
<header class="sticky top-0 z-50 border-b-4 border-black" style="background-color: #F5F2EB;">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        {{-- Logo --}}
        <a href="#" id="nav-logo" class="flex items-center gap-3 no-underline">
            {{-- Brand Logo Icon --}}
            <div class="flex size-10 items-center justify-center rounded-none border-2 border-black bg-white p-1 shadow-brutal-sm">
                <img src="{{ asset('logojanva.png') }}" alt="BY.JANVA" class="size-full object-contain">
            </div>
            <span class="font-display text-2xl tracking-wider text-black sm:text-3xl">BY.JANVA</span>
        </a>

        {{-- CTA Button --}}
        <a href="#kontak"
           id="nav-cta"
           class="hover-brutal inline-block rounded-none border-2 border-black bg-gradient-to-r from-orange-500 to-red-500 px-4 py-2 text-sm font-extrabold uppercase tracking-wide text-white shadow-brutal-sm no-underline sm:px-6 sm:text-base">
            Pesan Sekarang
        </a>
    </nav>
</header>
