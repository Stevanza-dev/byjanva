{{-- ═══════════════════════════════════════════════ --}}
{{-- FEATURES / BENEFITS SECTION --}}
{{-- ═══════════════════════════════════════════════ --}}
<section id="layanan" class="border-b-4 border-black py-16 sm:py-24" style="background-color: #F5F2EB;">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="mb-12 text-center sm:mb-16">
            <div class="mx-auto mb-4 inline-block rounded-none border-2 border-black bg-black px-4 py-1 shadow-brutal-sm">
                <span class="text-xs font-extrabold uppercase tracking-widest text-white">Kenapa Pilih Kami</span>
            </div>
            <h2 class="font-display text-4xl tracking-tight text-black sm:text-5xl md:text-6xl">KEUNGGULAN LAYANAN KAMI</h2>
        </div>

        {{-- Feature cards grid --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($features as $feature)
                @php
                    $bgColor = match($feature->icon_color) {
                        'red' => 'bg-red-500 text-white',
                        'yellow' => 'bg-yellow-400 text-black',
                        'green' => 'bg-green-500 text-white',
                        default => 'bg-orange-500 text-white',
                    };
                @endphp
                <div class="hover-brutal rounded-none border-4 border-black bg-white p-6 shadow-brutal">
                    <div class="mb-4 inline-flex size-14 items-center justify-center rounded-none border-2 border-black {{ $bgColor }}">
                        <x-dynamic-component :component="'heroicon-o-' . $feature->icon" class="size-8" />
                    </div>
                    <h3 class="font-display mb-2 text-2xl tracking-wide text-black">{{ $feature->title }}</h3>
                    <p class="text-sm font-medium leading-relaxed text-neutral-600">{{ $feature->description }}</p>
                </div>
            @empty
                {{-- Fallback cards --}}
                <div class="hover-brutal rounded-none border-4 border-black bg-white p-6 shadow-brutal">
                    <div class="mb-4 inline-flex size-14 items-center justify-center rounded-none border-2 border-black bg-orange-500 text-white">
                        <x-heroicon-o-map class="size-8" />
                    </div>
                    <h3 class="font-display mb-2 text-2xl tracking-wide text-black">AKURAT</h3>
                    <p class="text-sm font-medium leading-relaxed text-neutral-600">Data spasial presisi tinggi dengan referensi koordinat yang tervalidasi dan sumber peta resmi BIG.</p>
                </div>
                <div class="hover-brutal rounded-none border-4 border-black bg-white p-6 shadow-brutal">
                    <div class="mb-4 inline-flex size-14 items-center justify-center rounded-none border-2 border-black bg-red-500 text-white">
                        <x-heroicon-o-clock class="size-8" />
                    </div>
                    <h3 class="font-display mb-2 text-2xl tracking-wide text-black">PENGERJAAN CEPAT</h3>
                    <p class="text-sm font-medium leading-relaxed text-neutral-600">Estimasi pengerjaan 3–7 hari kerja tergantung kompleksitas. Cepat tanpa mengorbankan kualitas.</p>
                </div>
                <div class="hover-brutal rounded-none border-4 border-black bg-white p-6 shadow-brutal">
                    <div class="mb-4 inline-flex size-14 items-center justify-center rounded-none border-2 border-black bg-yellow-400 text-black">
                        <x-heroicon-o-shield-check class="size-8" />
                    </div>
                    <h3 class="font-display mb-2 text-2xl tracking-wide text-black">SESUAI STANDAR</h3>
                    <p class="text-sm font-medium leading-relaxed text-neutral-600">Mengikuti standar kartografi nasional dan kaidah pemetaan yang berlaku. Layak cetak format besar.</p>
                </div>
                <div class="hover-brutal rounded-none border-4 border-black bg-white p-6 shadow-brutal">
                    <div class="mb-4 inline-flex size-14 items-center justify-center rounded-none border-2 border-black bg-green-500 text-white">
                        <x-heroicon-o-camera class="size-8" />
                    </div>
                    <h3 class="font-display mb-2 text-2xl tracking-wide text-black">FOTO LOKASI IN-SITU</h3>
                    <p class="text-sm font-medium leading-relaxed text-neutral-600">Dokumentasi lapangan langsung di lokasi untuk data yang lebih kontekstual dan akurat.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
