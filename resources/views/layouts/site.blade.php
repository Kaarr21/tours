<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'City Cab and Taxi Services - Chauffeur-Driven Transport in Nairobi' }}</title>
    <meta name="description" content="{{ $description ?? 'City Cab and Taxi Services — chauffeur-driven transport, airport transfers, corporate leasing, excursions, country-wide travel, safaris, and VIP transport. Open 24 hours.' }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="{{ asset('images/brand/apple-touch-icon.png') }}">
    <meta name="theme-color" content="#F97316">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased min-h-screen flex flex-col">
    <x-site.nav />

    <main class="flex-1">
        {{ $slot }}
    </main>

    <x-site.footer />

    @if (session('success'))
        <div
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 5000)"
            class="fixed bottom-6 right-6 z-50 max-w-sm rounded-lg bg-safari-earth px-4 py-3 text-sm text-white shadow-lg"
        >
            {{ session('success') }}
        </div>
    @endif

    @livewireScripts
</body>
</html>
