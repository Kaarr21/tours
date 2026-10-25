@props([
    'label' => 'WhatsApp',
    'message' => null,
    'float' => false,
])

@php
    $baseUrl = (string) config('richman.whatsapp_url');
    $defaultMessage = (string) config('richman.whatsapp_message', 'Hello City Cab and Taxi — I would like to book a ride.');
    $text = $message ?? $defaultMessage;
    $href = $baseUrl.(str_contains($baseUrl, '?') ? '&' : '?').'text='.rawurlencode($text);
@endphp

@if ($float)
    <a
        href="{{ $href }}"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat on WhatsApp"
        {{ $attributes->class([
            'group fixed bottom-5 right-5 z-50 inline-flex items-center gap-3 rounded-full bg-[#25D366] pl-4 pr-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#25D366]/40 transition hover:-translate-y-0.5 hover:bg-[#1ebe57] hover:shadow-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-[#25D366] focus-visible:ring-offset-2 sm:bottom-6 sm:right-6',
        ]) }}
    >
        <span class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white/15">
            <span class="absolute inset-0 animate-ping rounded-full bg-white/20" aria-hidden="true"></span>
            <x-site.whatsapp-logo class="relative h-6 w-6" />
        </span>
        <span class="hidden sm:inline">{{ $label }}</span>
    </a>
@else
    <a
        href="{{ $href }}"
        target="_blank"
        rel="noopener noreferrer"
        {{ $attributes->class([
            'inline-flex items-center justify-center gap-2 rounded-md bg-[#25D366] px-6 py-3 font-semibold text-white shadow-md shadow-[#25D366]/25 transition hover:-translate-y-0.5 hover:bg-[#1ebe57] hover:shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-[#25D366] focus-visible:ring-offset-2',
        ]) }}
    >
        <x-site.whatsapp-logo class="h-5 w-5" />
        {{ $label }}
    </a>
@endif
