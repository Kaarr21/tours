@props([
    'heading' => 'Ready to book?',
    'body' => 'Call, WhatsApp, or send a ride request — we typically reply quickly and are open 24 hours.',
])

<div class="rounded-2xl border border-primary/20 bg-primary/5 p-8 text-center sm:p-10">
    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
        <x-site.icon name="sparkles" class="h-6 w-6" />
    </div>
    <h2 class="text-2xl font-bold text-foreground sm:text-3xl">{{ $heading }}</h2>
    <p class="mx-auto mt-3 max-w-2xl text-muted-foreground">{{ $body }}</p>
    <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
        <a
            href="{{ route('book-tour') }}"
            class="inline-flex items-center gap-2 rounded-md bg-primary px-6 py-3 font-semibold text-primary-foreground shadow-md transition hover:-translate-y-0.5 hover:bg-primary/90"
        >
            <x-site.icon name="calendar" class="h-5 w-5" />
            Book a Ride
        </a>
        <a
            href="tel:{{ config('richman.phone_e164') }}"
            class="inline-flex items-center gap-2 rounded-md border border-border bg-card px-6 py-3 font-semibold text-foreground transition hover:border-primary/40"
        >
            <x-site.icon name="phone" class="h-5 w-5 text-primary" />
            Call {{ config('richman.phone') }}
        </a>
        <x-site.whatsapp-button label="WhatsApp us" />
    </div>
</div>
