{{-- ═══════════════════════════════════════════════ --}}
{{-- FOOTER --}}
{{-- ═══════════════════════════════════════════════ --}}
<footer class="border-t-4 border-black bg-black">
    {{-- Stripe --}}
    <div class="stripe-bg h-2 w-full"></div>

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
            <div class="flex items-center gap-3">
                <div class="flex size-9 items-center justify-center rounded-none border-2 border-orange-500 bg-white p-1" style="box-shadow: 2px 2px 0px #F97316;">
                    <img src="{{ asset('logojanva.png') }}" alt="BY.JANVA" class="size-full object-contain">
                </div>
                <span class="font-display text-xl tracking-wider text-white">BY.JANVA</span>
            </div>

            <p class="text-center text-xs font-medium text-neutral-500">
                &copy; {{ date('Y') }} BY.JANVA. Jasa Pembuatan Peta Desa Profesional.
            </p>
        </div>
    </div>
</footer>
