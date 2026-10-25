<div>
    <section class="bg-gradient-to-b from-muted/60 to-background py-16 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <p class="mb-3 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-primary">
                <x-site.icon name="question" class="h-4 w-4" />Help centre
            </p>
            <h1 class="max-w-3xl text-4xl font-bold tracking-tight text-foreground sm:text-5xl">
                Frequently Asked Questions
            </h1>
            <p class="mt-6 max-w-3xl text-lg text-muted-foreground">
                Clear answers about City Cab and Taxi Services — what we offer in Nairobi and Kenya, how booking works, which vehicles are available, and how to confirm a quote.
            </p>
        </div>
    </section>

    <section class="py-16">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <dl class="space-y-6">
                @foreach ($faqs as $faq)
                    <div class="rounded-xl border border-border/50 bg-card p-6 shadow-sm">
                        <dt class="flex items-start gap-3 text-lg font-semibold text-foreground">
                            <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">
                                <x-site.icon name="question" class="h-4 w-4" />
                            </span>
                            {{ $faq['question'] }}
                        </dt>
                        <dd class="mt-3 pl-11 text-muted-foreground">{{ $faq['answer'] }}</dd>
                    </div>
                @endforeach
            </dl>

            <div class="mt-12 grid gap-4 sm:grid-cols-3">
                <a href="{{ route('services.airport-transfers') }}" class="inline-flex items-center gap-2 rounded-xl border border-border/50 bg-card p-5 font-semibold text-foreground transition hover:border-primary/40">
                    <x-site.icon name="plane" class="h-5 w-5 text-primary" />Airport transfers
                </a>
                <a href="{{ route('services.chauffeur') }}" class="inline-flex items-center gap-2 rounded-xl border border-border/50 bg-card p-5 font-semibold text-foreground transition hover:border-primary/40">
                    <x-site.icon name="key" class="h-5 w-5 text-primary" />Chauffeur services
                </a>
                <a href="{{ route('services.corporate') }}" class="inline-flex items-center gap-2 rounded-xl border border-border/50 bg-card p-5 font-semibold text-foreground transition hover:border-primary/40">
                    <x-site.icon name="briefcase" class="h-5 w-5 text-primary" />Corporate transport
                </a>
            </div>

            <div class="mt-14">
                <x-site.service-cta />
            </div>
        </div>
    </section>
</div>
