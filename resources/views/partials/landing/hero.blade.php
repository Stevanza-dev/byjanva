{{-- ═══════════════════════════════════════════════ --}}
{{-- HERO SECTION --}}
{{-- ═══════════════════════════════════════════════ --}}
<section id="hero" class="topo-pattern grid-overlay relative overflow-hidden border-b-4 border-black">
    {{-- Corner decorations --}}
    <div class="absolute right-4 top-4 hidden size-16 border-4 border-black opacity-10 lg:block" style="transform: rotate(15deg);"></div>
    <div class="absolute bottom-8 left-4 hidden size-12 border-4 border-black opacity-10 lg:block" style="transform: rotate(-10deg);"></div>

    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8 lg:py-32">
        <div class="flex flex-col items-start gap-8 lg:flex-row lg:items-center lg:gap-16">
            {{-- Text block --}}
            <div class="flex-1">
                {{-- Label badge --}}
                <div class="mb-6 inline-block rounded-none border-2 border-black bg-yellow-300 px-3 py-1 shadow-brutal-sm">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-black">Jasa Profesional</span>
                </div>

                <h1 class="font-display stamp-tilt mb-6 text-5xl leading-none tracking-tight text-black sm:text-6xl md:text-7xl lg:text-8xl">
                    JASA PEMBUATAN<br>
                    <span class="bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">PETA ADMINISTRASI</span><br>
                    & POTENSI DESA
                </h1>

                <p class="mb-8 max-w-xl text-base font-medium leading-relaxed text-neutral-700 sm:text-lg">
                    Solusi cepat, akurat, dan informatif untuk kebutuhan <strong class="text-black">KKN</strong> dan <strong class="text-black">Pemerintah Desa</strong>. Dikerjakan secara profesional dengan data spasial terkini.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#kontak"
                       id="hero-cta-primary"
                       class="hover-brutal inline-flex items-center gap-2 rounded-none border-4 border-black bg-gradient-to-r from-orange-500 to-red-500 px-6 py-3 text-base font-extrabold uppercase tracking-wide text-white shadow-brutal no-underline sm:px-8 sm:text-lg">
                        <x-heroicon-o-chat-bubble-left-right class="size-6 text-white" />
                        Hubungi via WhatsApp
                    </a>
                    <a href="#layanan"
                       id="hero-cta-secondary"
                       class="hover-brutal inline-flex items-center gap-2 rounded-none border-4 border-black bg-white px-6 py-3 text-base font-extrabold uppercase tracking-wide text-black shadow-brutal no-underline sm:px-8 sm:text-lg">
                        Lihat Layanan
                        <x-heroicon-o-arrow-right class="size-5" />
                    </a>
                </div>
            </div>

            {{-- Hero illustration: Map card --}}
            <div class="hidden w-full max-w-sm shrink-0 lg:block">
                <div class="rounded-none border-4 border-black bg-white p-6 shadow-brutal-lg" style="transform: rotate(3deg);">
                    {{-- Mini map illustration --}}
                    <div class="mb-4 flex flex-col items-center justify-center rounded-none border-2 border-black bg-green-100 p-8">
                        <x-heroicon-o-map class="size-28 text-green-800" />
                        <div class="mt-2 flex items-center gap-1 text-xs font-bold text-green-900">
                            <x-heroicon-s-map-pin class="size-4 text-red-500" />
                            <span>Titik Geospasial Presisi</span>
                        </div>
                    </div>
                    <div class="border-t-2 border-black pt-3">
                        <p class="font-display text-xl tracking-wide text-black">PETA DESA CONTOH</p>
                        <p class="text-sm font-medium text-neutral-600">Kec. Administrasi, Kab. Wilayah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Decorative stripe bar --}}
    <div class="stripe-bg h-3 w-full"></div>
</section>
