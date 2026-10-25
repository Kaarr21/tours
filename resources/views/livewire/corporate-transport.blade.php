<div>
    <x-service-schema
        name="Nairobi Corporate Transport"
        description="Corporate chauffeur transport in Nairobi for staff movements, client pickups, airport collections, and recurring business travel."
        :url="route('services.corporate')"
    />

    <section class="bg-gradient-to-b from-muted/60 to-background py-16 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <p class="mb-3 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-primary">
                <x-site.icon name="briefcase" class="h-4 w-4" />Corporate transport
            </p>
            <h1 class="max-w-3xl text-4xl font-bold tracking-tight text-foreground sm:text-5xl">
                Corporate Transport and Business Car Hire in Nairobi
            </h1>
            <p class="mt-6 max-w-3xl text-lg text-muted-foreground">
                Keep staff, clients, and visiting executives moving on time. City Cab and Taxi Services provides chauffeur-driven corporate transport for office collections, airport meet-and-greets, and recurring business travel across Nairobi.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('book-tour') }}" class="inline-flex items-center gap-2 rounded-md bg-primary px-6 py-3 font-semibold text-primary-foreground shadow-md transition hover:bg-primary/90">
                    <x-site.icon name="calendar" class="h-5 w-5" />Request a corporate quote
                </a>
                <a href="mailto:{{ config('richman.email') }}" class="inline-flex items-center gap-2 rounded-md border border-border bg-card px-6 py-3 font-semibold text-foreground">
                    <x-site.icon name="mail" class="h-5 w-5 text-primary" />Email {{ config('richman.email') }}
                </a>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2">
                <div>
                    <h2 class="text-3xl font-bold text-foreground">Built for business travel</h2>
                    <ul class="mt-6 space-y-4 text-muted-foreground">
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Staff transportation between offices, hotels, and meeting venues</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Client and guest pickups with professional chauffeurs</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />JKIA and Wilson Airport collections for visiting teams</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Recurring bookings aligned to your calendar</li>
                        <li class="flex gap-3"><x-site.icon name="check" class="mt-0.5 h-5 w-5 shrink-0 text-primary" />Vehicle options from executive MPVs to group passenger vans</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-foreground">How companies enquire</h2>
                    <p class="mt-4 text-muted-foreground">
                        Send your company name, usual routes, frequency, passenger counts, and preferred contact person. We reply with vehicle options and a clear quote. For urgent same-day needs, call or WhatsApp
                        <a href="tel:{{ config('richman.phone_e164') }}" class="font-semibold text-primary">{{ config('richman.phone') }}</a>.
                    </p>
                </div>
            </div>

            <div class="mt-14">
                <h2 class="text-3xl font-bold text-foreground">Corporate transport FAQs</h2>
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
                <a href="{{ route('services.chauffeur') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="key" class="h-4 w-4" />Chauffeur services</a>
                <a href="{{ route('faqs') }}" class="inline-flex items-center gap-1.5 font-semibold text-primary hover:underline"><x-site.icon name="question" class="h-4 w-4" />More FAQs</a>
            </div>

            <div class="mt-14">
                <x-site.service-cta
                    heading="Set up corporate transport"
                    body="Tell us your routes and schedule. We confirm vehicles, chauffeurs, and pricing before the first trip."
                />
            </div>
        </div>
    </section>
</div>
