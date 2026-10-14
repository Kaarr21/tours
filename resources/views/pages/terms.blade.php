@php
    $title = 'Terms of Service - City Cab and Taxi Services';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased min-h-screen flex flex-col">
    <x-site.nav />
    <main class="flex-1">
        <section class="mx-auto max-w-3xl px-4 py-16 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-foreground">Terms of Service</h1>
            <div class="mt-8 space-y-4 text-muted-foreground">
                <p>By using City Cab and Taxi Services booking and contact services, you agree to these terms.</p>
                <h2 class="pt-4 text-xl font-semibold text-foreground">Bookings</h2>
                <p>Ride requests are confirmed after Richard contacts you to agree pickup details, timing, and pricing. Submitting a form does not guarantee availability until confirmed.</p>
                <h2 class="pt-4 text-xl font-semibold text-foreground">Service</h2>
                <p>We provide chauffeur-driven transport, airport transfers, corporate leasing, excursions, country-wide travel, safaris, and VIP transport in Nairobi and across Kenya. We are open 24 hours. Schedules may change due to traffic, weather, or safety considerations.</p>
                <h2 class="pt-4 text-xl font-semibold text-foreground">Contact</h2>
                <p>For questions about these terms, contact {{ implode(' or ', config('richman.emails')) }} or {{ config('richman.phone') }}.</p>
            </div>
        </section>
    </main>
    <x-site.footer />
</body>
</html>
