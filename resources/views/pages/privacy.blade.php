@php
    $title = 'Privacy Policy - City Cab and Taxi Services';
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
            <h1 class="text-4xl font-bold text-foreground">Privacy Policy</h1>
            <div class="mt-8 space-y-4 text-muted-foreground">
                <p>City Cab and Taxi Services ("we", "our") respects your privacy. This policy explains how we collect and use information when you book chauffeur-driven transport, airport transfers, and related services.</p>
                <h2 class="pt-4 text-xl font-semibold text-foreground">Information we collect</h2>
                <p>When you book a ride or send a message, we collect details you provide such as your name, email, phone number, pickup/destination, travel dates, and message content.</p>
                <h2 class="pt-4 text-xl font-semibold text-foreground">How we use information</h2>
                <p>We use your information to confirm rides, provide transportation, and improve our service. We do not sell your personal information.</p>
                <h2 class="pt-4 text-xl font-semibold text-foreground">Contact</h2>
                <p>Questions about this policy can be sent to {{ implode(' or ', config('richman.emails')) }} or {{ config('richman.phone') }}.</p>
            </div>
        </section>
    </main>
    <x-site.footer />
</body>
</html>
