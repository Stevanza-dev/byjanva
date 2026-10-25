<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BY.JANVA — Jasa pembuatan peta administrasi dan potensi desa. Solusi cepat, akurat, dan informatif untuk KKN dan Pemerintah Desa.">
    <title>BY.JANVA — Jasa Pembuatan Peta Desa</title>
    <link rel="icon" type="image/png" href="{{ asset('logojanva.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logojanva.png') }}">

    {{-- Fonts: Bold heavy sans-serif --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bebas-neue:400|inter:400,500,600,700,800,900" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Neo-brutalism base overrides */
        body {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
            background-color: #F5F2EB;
            color: #1a1a1a;
        }
        .font-display {
            font-family: 'Bebas Neue', 'Impact', ui-sans-serif, sans-serif;
        }
        /* Sharp neo-brutal shadow */
        .shadow-brutal {
            box-shadow: 4px 4px 0px rgba(0,0,0,1);
        }
        .shadow-brutal-lg {
            box-shadow: 6px 6px 0px rgba(0,0,0,1);
        }
        .shadow-brutal-sm {
            box-shadow: 3px 3px 0px rgba(0,0,0,1);
        }
        /* Hover lift */
        .hover-brutal {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        .hover-brutal:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px rgba(0,0,0,1);
        }
        .hover-brutal:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px rgba(0,0,0,1);
        }
        /* Stamp tilt */
        .stamp-tilt {
            transform: rotate(-2deg);
        }
        /* Topographic grid pattern */
        .topo-pattern {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Cpath d='M0 50 Q25 30 50 50 T100 50' fill='none' stroke='%23d4c9b8' stroke-width='0.5'/%3E%3Cpath d='M0 30 Q25 10 50 30 T100 30' fill='none' stroke='%23d4c9b8' stroke-width='0.5'/%3E%3Cpath d='M0 70 Q25 50 50 70 T100 70' fill='none' stroke='%23d4c9b8' stroke-width='0.5'/%3E%3Cpath d='M0 90 Q25 70 50 90 T100 90' fill='none' stroke='%23d4c9b8' stroke-width='0.5'/%3E%3Cpath d='M0 10 Q25 -10 50 10 T100 10' fill='none' stroke='%23d4c9b8' stroke-width='0.5'/%3E%3C/svg%3E");
        }
        /* Grid overlay */
        .grid-overlay {
            background-image:
                linear-gradient(rgba(0,0,0,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,0,0,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        /* Dashed connector line for steps */
        .step-connector {
            border-top: 3px dashed #1a1a1a;
        }
        .step-connector-v {
            border-left: 3px dashed #1a1a1a;
        }
        /* Marquee stripe */
        .stripe-bg {
            background: repeating-linear-gradient(
                -45deg,
                #F97316,
                #F97316 10px,
                #EF4444 10px,
                #EF4444 20px
            );
        }
    </style>
</head>
<body class="min-h-screen antialiased">

    {{-- Header / Navbar --}}
    @include('partials.landing.navbar')

    {{-- Hero Section --}}
    @include('partials.landing.hero')

    {{-- Features / Benefits Section --}}
    @include('partials.landing.features', ['features' => $features])

    {{-- How It Works / Steps Section --}}
    @include('partials.landing.order-steps', ['orderSteps' => $orderSteps])

    {{-- Contact / CTA Section --}}
    @include('partials.landing.contact')

    {{-- Footer --}}
    @include('partials.landing.footer')

</body>
</html>
