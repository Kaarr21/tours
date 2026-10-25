<div>
    <x-service-schema
        name="Nairobi Chauffeur Service"
        description="Private chauffeur-driven hire in Nairobi for city travel, business meetings, hotel transfers, and day-long itineraries."
        :url="route('services.chauffeur')"
    />

    <section class="bg-gradient-to-b from-muted/60 to-background py-16 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <p class="mb-3 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-primary">
                <x-site.icon name="key" class="h-4 w-4" />Chauffeur services
            </p>
            <h1 class="max-w-3xl text-4xl font-bold tracking-tight text-foreground sm:text-5xl">
                Professional Chauffeur Service in Nairobi
            </h1>
            <p class="mt-6 max-w-3xl text-lg text-muted-foreground">
                Hire a professional driver for city rides, meetings, hotel transfers, and day-long itineraries. City Cab and Taxi Services pairs experienced local chauffeurs with clean, comfortable vehicles — open 24 hours for early starts and late finishes.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('book-tour') }}" class="inline-flex items-center gap-2 rounded-md bg-primary px-6 py-3 font-semibold text-primary-foreground shadow-md transition hover:bg-primary/90">
                    <x-site.icon name="calendar" class="h-5 w-5" />Book a chauffeur
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
                    <h2 class="text-3xl font-bold text-foreground">When a private chauffeur helps</h2>
                    <ul class="mt-6 space-y-4 text-muted-foreground">
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Business meetings and multi-stop city days</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Hotel and residential collections</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Family outings with luggage or child seats discussed in advance</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Executive and VIP movements with a quieter, refined ride</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Hourly or full-day hire based on your itinerary</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-foreground">Vehicle options</h2>
                    <p class="mt-4 text-muted-foreground">
                        Choose from 7-seat MPVs for everyday chauffeur work and airport runs, executive MPVs for premium comfort, or passenger vans when travelling with a larger group. We match the vehicle to passenger count and luggage before confirming your booking.
                    </p>
                    <a href="{{ route('home') }}#fleet" class="mt-4 inline-flex items-center gap-1.5 font-semibold text-primary hover:underline">
                        <x-site.icon name="truck" class="h-4 w-4" />Browse the fleet
                    </a>
                </div>
            </div>

            <div class="mt-14">
                <h2 class="text-3xl font-bold text-foreground">Chauffeur FAQs</h2>
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
                <a href="{{ route('services.airport-transfers') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="plane" class="h-4 w-4" />Airport transfers</a>
                <a href="{{ route('services.corporate') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="briefcase" class="h-4 w-4" />Corporate transport</a>
                <a href="{{ route('faqs') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="question" class="h-4 w-4" />More FAQs</a>
            </div>

            <div class="mt-14">
                <x-site.service-cta
                    heading="Need a driver for the day?"
                    body="Share your pickup point, schedule, and passenger count. We confirm the chauffeur, vehicle, and quote before you ride."
                />
            </div>
        </div>
    </section>
</div>
