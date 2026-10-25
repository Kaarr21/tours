@php
    $serviceIcons = [
        'plane' => 'M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5',
        'briefcase' => 'M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0',
        'key' => 'M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z',
        'map' => 'M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z',
        'road' => 'M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12',
        'calendar' => 'M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5',
    ];
@endphp

<div>
    {{-- Hero --}}
    <section
        class="relative min-h-[88vh] overflow-hidden text-white"
        x-data="{
            active: 0,
            images: @js(collect($heroImages)->map(fn ($img) => asset($img))->values()),
            ready: false,
            passengers: 0,
            years: 0,
            counted: false,
            init() {
                requestAnimationFrame(() => { this.ready = true })
                this.$watch('ready', (value) => { if (value) this.countStats() })
                setInterval(() => { this.active = (this.active + 1) % this.images.length }, 6000)
            },
            countStats() {
                if (this.counted) return
                this.counted = true
                const animate = (key, target, ms) => {
                    const start = performance.now()
                    const tick = (now) => {
                        const p = Math.min(1, (now - start) / ms)
                        this[key] = Math.round(target * (1 - Math.pow(1 - p, 3)))
                        if (p < 1) requestAnimationFrame(tick)
                    }
                    requestAnimationFrame(tick)
                }
                animate('passengers', 1000, 1600)
                animate('years', 20, 1200)
            }
        }"
    >
        <template x-for="(image, index) in images" :key="index">
            <div
                class="absolute inset-0 bg-cover bg-center transition-opacity duration-[1400ms] ease-out"
                :style="`background-image: url('${image}')`"
                :class="active === index ? 'opacity-100 hero-ken-burns' : 'opacity-0 scale-105'"
            ></div>
        </template>
        <div class="absolute inset-0 bg-gradient-hero"></div>

        <div class="relative mx-auto flex min-h-[88vh] max-w-6xl flex-col items-center justify-center px-4 py-20 text-center sm:px-6 lg:px-8">
            <p
                class="mb-4 inline-flex items-center gap-2 text-sm font-medium text-white/95 [text-shadow:0_1px_8px_rgba(0,0,0,0.55)] transition-all duration-700 ease-out"
                :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 animate-pulse text-primary drop-shadow">
                    <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 15.278 17 12.907 17 10a7 7 0 1 0-14 0c0 2.907 1.698 5.278 3.353 6.584a13.66 13.66 0 0 0 2.274 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd" />
                </svg>
                Chauffeur-driven · Open 24 hours
            </p>

            <h1
                class="max-w-4xl text-4xl font-bold tracking-tight [text-shadow:0_2px_16px_rgba(0,0,0,0.55)] transition-all delay-150 duration-800 ease-out sm:text-5xl md:text-6xl"
                :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                Reliable Taxi, Chauffeur and Airport Transfer Services in <span class="text-primary">Nairobi</span>
            </h1>

            <p
                class="mt-6 max-w-2xl text-base text-white/95 [text-shadow:0_1px_10px_rgba(0,0,0,0.55)] transition-all delay-300 duration-800 ease-out sm:text-lg"
                :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                City Cab and Taxi Services provides chauffeur-driven transport for individuals, families, business travellers and groups in Nairobi and across Kenya. Explore airport transfers, private chauffeur services, corporate transport, excursions and intercity journeys.
            </p>

            <div
                class="mt-8 flex flex-wrap items-center justify-center gap-4 transition-all delay-500 duration-800 ease-out"
                :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <a href="{{ route('book-tour') }}" class="group inline-flex items-center gap-2 rounded-md bg-primary px-8 py-4 text-lg font-semibold text-primary-foreground shadow-lg shadow-primary/30 transition duration-300 hover:-translate-y-1 hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/40">
                    <x-site.icon name="calendar" class="h-5 w-5" />
                    Book a Ride
                    <x-site.icon name="arrow-right" class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" />
                </a>
                <a href="#fleet" class="inline-flex items-center gap-2 rounded-md border border-white/40 bg-white/10 px-8 py-4 text-lg font-semibold text-white backdrop-blur transition duration-300 hover:-translate-y-1 hover:bg-white/20">
                    <x-site.icon name="truck" class="h-5 w-5" />
                    View Our Fleet
                </a>
            </div>

            <div
                class="mt-12 grid w-full max-w-3xl grid-cols-3 gap-6 [text-shadow:0_1px_10px_rgba(0,0,0,0.55)] transition-all delay-700 duration-800 ease-out"
                :class="ready ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <div class="text-center">
                    <div class="mb-1 flex justify-center text-primary"><x-site.icon name="users" class="h-5 w-5" /></div>
                    <div class="text-3xl font-bold text-primary"><span x-text="passengers">1000</span>+</div>
                    <div class="text-white/90">Happy Passengers</div>
                </div>
                <div class="text-center">
                    <div class="mb-1 flex justify-center text-primary"><x-site.icon name="sparkles" class="h-5 w-5" /></div>
                    <div class="text-3xl font-bold text-primary"><span x-text="years">20</span>+</div>
                    <div class="text-white/90">Years Driving</div>
                </div>
                <div class="text-center">
                    <div class="mb-1 flex justify-center text-primary"><x-site.icon name="clock" class="h-5 w-5" /></div>
                    <div class="text-3xl font-bold text-primary">24/7</div>
                    <div class="text-white/90">Availability</div>
                </div>
            </div>

            <div class="absolute bottom-8 left-1/2 flex -translate-x-1/2 space-x-2">
                <template x-for="(image, index) in images" :key="'dot-'+index">
                    <button
                        type="button"
                        class="h-2.5 rounded-full transition-all duration-500"
                        :class="active === index ? 'w-8 bg-primary' : 'w-2.5 bg-white/40 hover:bg-white/70'"
                        @click="active = index"
                        :aria-label="'View image ' + (index + 1)"
                    ></button>
                </template>
            </div>

            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 animate-bounce text-white/70" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </section>

    {{-- Why Ride --}}
    <section
        class="bg-background py-20"
        x-data="{
            shown: false,
            init() {
                const observer = new IntersectionObserver(([entry]) => {
                    if (entry.isIntersecting) {
                        this.shown = true
                        observer.disconnect()
                    }
                }, { threshold: 0.15 })
                observer.observe(this.$el)
            }
        }"
    >
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div
                class="mx-auto max-w-3xl text-center transition-all duration-700 ease-out"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h2 class="text-4xl font-bold text-foreground md:text-5xl">
                    Why choose <span class="text-gradient-safari">City Cab?</span>
                </h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Based in Nairobi with 20+ years behind the wheel, Richard delivers dependable chauffeur-driven transport — clear pricing, clean vehicles, and drivers who know the city roads. Open 24 hours.
                </p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['title' => 'Nairobi Road Knowledge', 'body' => 'Local routes, traffic shortcuts, and estate access so you arrive on time.'],
                    ['title' => 'Licensed & Experienced', 'body' => 'Professional chauffeurs with years of safe city and highway driving.'],
                    ['title' => 'Comfortable Fleet', 'body' => 'Clean MPV and passenger vans for families, executives, and groups.'],
                    ['title' => 'Open 24 Hours', 'body' => 'Early flights, late arrivals, and same-day transfers — available around the clock.'],
                ] as $i => $card)
                    <div
                        class="rounded-xl border border-border/50 bg-card p-6 shadow-sm transition-all duration-700 ease-out hover:-translate-y-2 hover:border-primary/30 hover:shadow-lg"
                        style="transition-delay: {{ 100 + ($i * 100) }}ms"
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                    >
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground">{{ $card['title'] }}</h3>
                        <p class="mt-2 text-sm text-muted-foreground">{{ $card['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section
        id="services"
        class="bg-muted/40 py-20"
        x-data="{
            shown: false,
            init() {
                const observer = new IntersectionObserver(([entry]) => {
                    if (entry.isIntersecting) {
                        this.shown = true
                        observer.disconnect()
                    }
                }, { threshold: 0.12 })
                observer.observe(this.$el)
            }
        }"
    >
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div
                class="mx-auto max-w-3xl text-center transition-all duration-700 ease-out"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.2em] text-primary">Our services</p>
                <h2 class="text-4xl font-bold text-foreground md:text-5xl">
                    Travel solutions for <span class="text-gradient-safari">every journey</span>
                </h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Chauffeur-driven transport, airport transfers, corporate leasing, excursions, safaris, and VIP travel — open 24 hours.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $i => $service)
                    @php $serviceHref = ! empty($service['route']) ? route($service['route']) : null; @endphp
                    @if ($serviceHref)
                        <a
                            href="{{ $serviceHref }}"
                            class="group block rounded-xl border border-border/50 bg-card p-6 shadow-sm transition-all duration-700 ease-out hover:-translate-y-2 hover:border-primary/30 hover:shadow-lg"
                            style="transition-delay: {{ 80 + ($i * 90) }}ms"
                            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary transition duration-300 group-hover:scale-110 group-hover:bg-primary group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $serviceIcons[$service['icon']] ?? $serviceIcons['map'] }}" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-foreground">{{ $service['title'] }}</h3>
                            <p class="mt-2 text-sm text-muted-foreground">{{ $service['body'] }}</p>
                            <p class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-primary">
                                Learn more <x-site.icon name="arrow-right" class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                            </p>
                        </a>
                    @else
                        <article
                            class="group rounded-xl border border-border/50 bg-card p-6 shadow-sm transition-all duration-700 ease-out hover:-translate-y-2 hover:border-primary/30 hover:shadow-lg"
                            style="transition-delay: {{ 80 + ($i * 90) }}ms"
                            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                        >
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary transition duration-300 group-hover:scale-110 group-hover:bg-primary group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $serviceIcons[$service['icon']] ?? $serviceIcons['map'] }}" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-foreground">{{ $service['title'] }}</h3>
                            <p class="mt-2 text-sm text-muted-foreground">{{ $service['body'] }}</p>
                        </article>
                    @endif
                @endforeach
            </div>

            <div
                class="mt-10 text-center transition-all delay-500 duration-700 ease-out"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <p class="mb-4 text-muted-foreground">Need a custom route or multi-stop day? Tell us where you need to go.</p>
                <a href="{{ route('book-tour') }}" class="inline-flex items-center gap-2 rounded-md border border-primary px-6 py-3 font-semibold text-primary transition duration-300 hover:-translate-y-0.5 hover:bg-primary hover:text-primary-foreground hover:shadow-md">
                    <x-site.icon name="key" class="h-5 w-5" />
                    Book a Chauffeur
                </a>
            </div>
        </div>
    </section>

    {{-- Fleet --}}
    <section
        id="fleet"
        class="bg-background py-20"
        x-data="{
            shown: false,
            init() {
                const observer = new IntersectionObserver(([entry]) => {
                    if (entry.isIntersecting) {
                        this.shown = true
                        observer.disconnect()
                    }
                }, { threshold: 0.12 })
                observer.observe(this.$el)
            }
        }"
    >
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div
                class="mx-auto max-w-3xl text-center transition-all duration-700 ease-out"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.2em] text-primary">Our fleet</p>
                <h2 class="text-4xl font-bold text-foreground md:text-5xl">
                    Travel in spacious <span class="text-gradient-safari">comfort</span>
                </h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Comfortable, well-kept vehicles sized for families, corporate groups, safaris, and luggage-heavy airport runs.
                </p>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2">
                @foreach ($fleet as $i => $vehicle)
                    <article
                        class="group overflow-hidden rounded-2xl border border-border/50 bg-card shadow-sm transition-all duration-700 ease-out hover:-translate-y-2 hover:shadow-xl"
                        style="transition-delay: {{ 100 + ($i * 110) }}ms"
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                    >
                        <div class="relative aspect-[16/10] overflow-hidden bg-muted">
                            <img
                                src="{{ asset($vehicle['image']) }}"
                                alt="{{ $vehicle['name'] }}"
                                class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                                loading="lazy"
                            >
                            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-4">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-primary px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white">
                                    <x-site.icon name="users" class="h-3.5 w-3.5" />
                                    {{ $vehicle['seats'] }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-3">
                                <h3 class="text-2xl font-semibold text-foreground">{{ $vehicle['name'] }}</h3>
                                <span class="shrink-0 text-xs font-medium uppercase tracking-wide text-primary">{{ $vehicle['best_for'] }}</span>
                            </div>
                            <p class="mt-2 text-sm text-muted-foreground">{{ $vehicle['body'] }}</p>
                            <a
                                href="{{ route('book-tour') }}"
                                class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-primary transition hover:gap-2"
                            >
                                <x-site.icon name="calendar" class="h-4 w-4" />
                                Book this vehicle
                                <x-site.icon name="arrow-right" class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section
        id="contact"
        class="bg-muted/40 py-20"
        x-data="{
            shown: false,
            init() {
                const observer = new IntersectionObserver(([entry]) => {
                    if (entry.isIntersecting) {
                        this.shown = true
                        observer.disconnect()
                    }
                }, { threshold: 0.12 })
                observer.observe(this.$el)
            }
        }"
    >
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div
                class="mx-auto max-w-3xl text-center transition-all duration-700 ease-out"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            >
                <h2 class="text-4xl font-bold text-foreground md:text-5xl">Book Your Ride Today</h2>
                <p class="mt-4 text-lg text-muted-foreground">
                    Airport transfer, safari, or VIP transport anywhere in Nairobi and beyond? Send a message — we typically reply within 2 hours. Open 24 hours.
                </p>
            </div>

            <div class="mt-12 grid gap-12 lg:grid-cols-3">
                <div
                    class="lg:col-span-2 transition-all duration-700 ease-out"
                    :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
                >
                    <livewire:contact-form />
                </div>

                <div class="space-y-4">
                    @foreach ([
                        ['title' => 'Phone / WhatsApp', 'icon' => 'phone', 'details' => [config('richman.phone')], 'subtitle' => 'Fastest way to confirm a ride'],
                        ['title' => 'Email', 'icon' => 'mail', 'details' => config('richman.emails'), 'subtitle' => 'Quotes and booking details'],
                        ['title' => 'Base', 'icon' => 'map-pin', 'details' => [config('richman.location'), config('richman.location_detail')], 'subtitle' => 'Pickups across Nairobi'],
                        ['title' => 'Hours', 'icon' => 'clock', 'details' => ['Open 24 hours', 'Advance booking preferred'], 'subtitle' => 'Early mornings & late flights welcome'],
                    ] as $i => $info)
                        <div
                            class="rounded-xl border border-border/50 bg-card p-5 shadow-sm transition-all duration-700 ease-out hover:-translate-y-1 hover:border-primary/30 hover:shadow-md"
                            style="transition-delay: {{ 150 + ($i * 100) }}ms"
                            :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8'"
                        >
                            <h3 class="inline-flex items-center gap-2 text-lg font-semibold text-foreground">
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary">
                                    <x-site.icon :name="$info['icon']" class="h-4 w-4" />
                                </span>
                                {{ $info['title'] }}
                            </h3>
                            @foreach ($info['details'] as $detail)
                                <p class="mt-1 text-foreground/90">{{ $detail }}</p>
                            @endforeach
                            <p class="mt-1 text-sm text-muted-foreground">{{ $info['subtitle'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
