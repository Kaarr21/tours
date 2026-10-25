<div>
    <x-service-schema
        name="Nairobi Airport Transfer Service"
        description="Chauffeur-driven JKIA and Wilson Airport transfers in Nairobi with meet-and-greet, flight tracking on request, and door-to-door drop-offs."
        :url="route('services.airport-transfers')"
    />

    <section class="bg-gradient-to-b from-muted/60 to-background py-16 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <p class="mb-3 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-primary">
                <x-site.icon name="plane" class="h-4 w-4" />Airport transfers
            </p>
            <h1 class="max-w-3xl text-4xl font-bold tracking-tight text-foreground sm:text-5xl">
                Nairobi Airport Transfers from JKIA and Wilson
            </h1>
            <p class="mt-6 max-w-3xl text-lg text-muted-foreground">
                City Cab and Taxi Services provides chauffeur-driven airport pickups and drop-offs in Nairobi. Whether you are landing at JKIA or Wilson Airport, we arrange meet-and-greet, luggage-friendly vehicles, and door-to-door delivery to hotels, homes, and offices across the city.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('book-tour') }}" class="inline-flex items-center gap-2 rounded-md bg-primary px-6 py-3 font-semibold text-primary-foreground shadow-md transition hover:bg-primary/90">
                    <x-site.icon name="calendar" class="h-5 w-5" />Request an airport transfer
                </a>
                <a href="tel:{{ config('richman.phone_e164') }}" class="inline-flex items-center gap-2 rounded-md border border-border bg-card px-6 py-3 font-semibold text-foreground">
                    <x-site.icon name="phone" class="h-5 w-5 text-primary" />Call {{ config('richman.phone') }}
                </a>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2">
                <div>
                    <h2 class="text-3xl font-bold text-foreground">What we cover</h2>
                    <ul class="mt-6 space-y-4 text-muted-foreground">
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" /><span><span class="font-semibold text-foreground">JKIA pickups and drop-offs</span> — arrivals and departures with clear meeting instructions.</span></li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" /><span><span class="font-semibold text-foreground">Wilson Airport transfers</span> — domestic and light-aircraft connections.</span></li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" /><span><span class="font-semibold text-foreground">City destinations</span> — Westlands, CBD, hotels, residential estates, and offices.</span></li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" /><span><span class="font-semibold text-foreground">Flight tracking on request</span> — useful for delayed arrivals when details are shared in advance.</span></li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" /><span><span class="font-semibold text-foreground">Luggage-aware vehicles</span> — MPVs and vans sized for families, executives, and groups.</span></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-foreground">How booking works</h2>
                    <ol class="mt-6 list-decimal space-y-4 pl-5 text-muted-foreground">
                        <li>Share your flight number or pickup time, destination, passenger count, and luggage needs.</li>
                        <li>We confirm the vehicle and quote before you travel.</li>
                        <li>On the day, your chauffeur meets you as arranged and takes you door to door.</li>
                    </ol>
                    <div class="mt-6 space-y-3">
                        <p class="text-muted-foreground">
                            Prefer WhatsApp? Send your flight details and we will confirm your pickup.
                        </p>
                        <x-site.whatsapp-button
                            label="Message on WhatsApp"
                            message="Hello City Cab — I need an airport transfer. Flight details:"
                        />
                    </div>
                </div>
            </div>

            <div class="mt-14">
                <h2 class="text-3xl font-bold text-foreground">Airport transfer FAQs</h2>
                <dl class="mt-8 space-y-6">
                    @foreach ($faqs as $faq)
                        <div class="rounded-xl border border-border/50 bg-card p-6">
                            <dt class="flex items-start gap-3 text-lg font-semibold text-foreground">
                                <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">
                                    <x-site.icon name="question" class="h-4 w-4" />
                                </span>
                                {{ $faq['question'] }}
                            </dt>
                            <dd class="mt-2 pl-11 text-muted-foreground">{{ $faq['answer'] }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            <div class="mt-10 flex flex-wrap gap-4 text-sm">
                <a href="{{ route('services.chauffeur') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="key" class="h-4 w-4" />Chauffeur services</a>
                <a href="{{ route('services.corporate') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="briefcase" class="h-4 w-4" />Corporate transport</a>
                <a href="{{ route('home') }}#fleet" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="truck" class="h-4 w-4" />View fleet</a>
                <a href="{{ route('faqs') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="question" class="h-4 w-4" />More FAQs</a>
            </div>

            <div class="mt-14">
                <x-site.service-cta
                    heading="Need an airport pickup?"
                    body="Tell us your flight time and drop-off point. We confirm the vehicle, quote, and meeting point before you land."
                />
            </div>
        </div>
    </section>
</div>
