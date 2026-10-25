{{-- ═══════════════════════════════════════════════ --}}
{{-- HOW IT WORKS (ALUR PEMESANAN) --}}
{{-- ═══════════════════════════════════════════════ --}}
<section id="alur" class="border-b-4 border-black bg-black py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="mb-12 text-center sm:mb-16">
            <div class="mx-auto mb-4 inline-block rounded-none border-2 border-orange-500 bg-orange-500 px-4 py-1 shadow-brutal-sm">
                <span class="text-xs font-extrabold uppercase tracking-widest text-white">Langkah Mudah</span>
            </div>
            <h2 class="font-display text-4xl tracking-tight text-white sm:text-5xl md:text-6xl">ALUR PEMESANAN</h2>
            <p class="mx-auto mt-4 max-w-2xl text-base font-medium text-neutral-400">Proses pemesanan yang simpel dan transparan. Dari konsultasi hingga peta jadi di tangan Anda.</p>
        </div>

        {{-- Steps - Desktop: horizontal connected, Mobile: vertical --}}
        <div class="relative">
            {{-- Desktop horizontal layout --}}
            <div class="hidden lg:block">
                {{-- Dashed connector line --}}
                <div class="absolute left-[10%] right-[10%] top-[60px] step-connector z-0" style="border-color: #F97316;"></div>

                <div class="relative z-10 grid grid-cols-5 gap-4">
                    @forelse ($orderSteps as $step)
                        @php
                            $isGreen = $step->icon_color === 'green';
                            $borderColor = $isGreen ? 'border-green-500' : 'border-orange-500';
                            $textColor = $isGreen ? 'text-green-500' : 'text-orange-500';
                            $shadowHex = $isGreen ? '#22c55e' : '#F97316';
                        @endphp
                        <div class="flex flex-col items-center text-center">
                            <div class="hover-brutal mb-4 flex size-[120px] items-center justify-center rounded-none border-4 {{ $borderColor }} bg-neutral-900 shadow-brutal-sm" style="box-shadow: 4px 4px 0px {{ $shadowHex }};">
                                <x-dynamic-component :component="'heroicon-o-' . $step->icon" class="size-12 {{ $textColor }}" />
                            </div>
                            <span class="font-display mb-1 text-3xl {{ $textColor }}">{{ sprintf('%02d', $step->step_number) }}</span>
                            <h3 class="font-display text-xl tracking-wide text-white">{{ $step->title }}</h3>
                            <p class="mt-1 text-xs font-medium text-neutral-400">{{ $step->description }}</p>
                        </div>
                    @empty
                        <div class="col-span-5 text-center text-neutral-400">Belum ada langkah pemesanan.</div>
                    @endforelse
                </div>
            </div>

            {{-- Mobile vertical layout --}}
            <div class="lg:hidden">
                <div class="relative ml-[30px] border-l-[3px] border-dashed border-orange-500 pl-8">
                    @foreach ($orderSteps as $step)
                        @php
                            $isGreen = $step->icon_color === 'green';
                            $dotColor = $isGreen ? 'border-green-500 bg-green-500' : 'border-orange-500 bg-orange-500';
                            $textColor = $isGreen ? 'text-green-500' : 'text-orange-500';
                        @endphp
                        <div class="relative mb-10 last:mb-0">
                            {{-- Dot on the line --}}
                            <div class="absolute -left-[calc(2rem+8px)] top-2 size-4 rounded-none border-2 {{ $dotColor }}"></div>
                            <div class="mb-2 inline-flex items-center gap-2">
                                <span class="font-display text-2xl {{ $textColor }}">{{ sprintf('%02d', $step->step_number) }}</span>
                                <x-dynamic-component :component="'heroicon-o-' . $step->icon" class="size-5 {{ $textColor }}" />
                            </div>
                            <h3 class="font-display text-xl tracking-wide text-white">{{ $step->title }}</h3>
                            <p class="mt-1 text-sm font-medium text-neutral-400">{{ $step->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
