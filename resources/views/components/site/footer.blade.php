<footer
    class="relative overflow-hidden bg-[#1c1712] text-white"
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
    {{-- Animated request banner --}}
    <div class="relative border-b border-white/10">
        <div class="mx-auto flex max-w-6xl flex-col gap-6 px-4 py-8 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
            <p
                class="max-w-xl text-sm leading-relaxed text-white/80 transition-all duration-700 ease-out sm:text-base"
                :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
            >
                We are proud of our reputation, built over many years — getting you where you need to go promptly, comfortably, and safely.
            </p>

            <a
                href="tel:{{ config('richman.phone_e164') }}"
                class="footer-cta group relative inline-flex items-center gap-3 bg-primary px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-primary/30 transition-all duration-700 ease-out hover:bg-primary/90 sm:text-base"
                :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'"
            >
                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white/15 transition group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                </span>
                <span>
                    <span class="block text-xs uppercase tracking-[0.18em] text-white/80">Book a Ride</span>
                    <span class="block">{{ config('richman.phone') }}</span>
                </span>
            </a>
        </div>
    </div>

    {{-- Scrolling service ticker --}}
    <div class="overflow-hidden border-b border-white/10 bg-black/20 py-3" aria-hidden="true">
        <div class="footer-marquee flex w-max gap-10 whitespace-nowrap text-xs font-semibold uppercase tracking-[0.25em] text-primary/90">
            @foreach (array_merge(
                ['Chauffeur-Driven', 'Airport Transfers', 'Corporate Leasing', 'Excursions', 'Country-Wide Transport', 'Safaris', 'VIP Transport', 'Open 24 Hours'],
                ['Chauffeur-Driven', 'Airport Transfers', 'Corporate Leasing', 'Excursions', 'Country-Wide Transport', 'Safaris', 'VIP Transport', 'Open 24 Hours']
            ) as $item)
                <span class="inline-flex items-center gap-3">
                    <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                    {{ $item }}
                </span>
            @endforeach
        </div>
    </div>

    <div class="mx-auto grid max-w-6xl gap-10 px-4 py-14 sm:px-6 md:grid-cols-2 lg:grid-cols-4 lg:px-8">
        <div
            class="space-y-4 transition-all duration-700 ease-out"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <x-site.logo light />
            <p class="text-sm leading-relaxed text-white/75">
                Chauffeur-driven taxi and cab services with a trusted local driver. Airport transfers, corporate leasing, excursions, safaris, and VIP transport — open 24 hours.
            </p>
        </div>

        <div
            class="transition-all delay-100 duration-700 ease-out"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <h3 class="mb-4 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.18em] text-primary">
                <x-site.icon name="clock" class="h-4 w-4" />Working Hours
            </h3>
            <ul class="space-y-3 text-sm text-white/85">
                <li>
                    <p class="inline-flex items-center gap-2 font-medium text-white">
                        <x-site.icon name="sparkles" class="h-4 w-4 text-primary" />Every day
                    </p>
                    <p class="pl-6 text-white/65">Open 24 hours</p>
                </li>
                <li>
                    <p class="inline-flex items-center gap-2 font-medium text-white">
                        <x-site.icon name="calendar" class="h-4 w-4 text-primary" />Bookings
                    </p>
                    <p class="pl-6 text-white/65">Advance booking preferred</p>
                </li>
            </ul>
        </div>

        <div
            class="transition-all delay-200 duration-700 ease-out"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-[0.18em] text-primary">Quick Links</h3>
            <ul class="space-y-2 text-sm text-white/85">
                <li><a href="{{ route('home') }}" class="footer-link inline-flex items-center gap-2"><x-site.icon name="home" class="h-4 w-4 text-primary" />Home</a></li>
                <li><a href="{{ route('services.airport-transfers') }}" class="footer-link inline-flex items-center gap-2"><x-site.icon name="plane" class="h-4 w-4 text-primary" />Airport Transfers</a></li>
                <li><a href="{{ route('services.chauffeur') }}" class="footer-link inline-flex items-center gap-2"><x-site.icon name="key" class="h-4 w-4 text-primary" />Chauffeur Services</a></li>
                <li><a href="{{ route('services.corporate') }}" class="footer-link inline-flex items-center gap-2"><x-site.icon name="briefcase" class="h-4 w-4 text-primary" />Corporate Transport</a></li>
                <li><a href="{{ route('home') }}#fleet" class="footer-link inline-flex items-center gap-2"><x-site.icon name="truck" class="h-4 w-4 text-primary" />Our Fleet</a></li>
                <li><a href="{{ route('faqs') }}" class="footer-link inline-flex items-center gap-2"><x-site.icon name="question" class="h-4 w-4 text-primary" />FAQs</a></li>
                <li><a href="{{ route('book-tour') }}" class="footer-link inline-flex items-center gap-2"><x-site.icon name="calendar" class="h-4 w-4 text-primary" />Book a Ride</a></li>
                <li><a href="{{ route('home') }}#contact" class="footer-link inline-flex items-center gap-2"><x-site.icon name="chat" class="h-4 w-4 text-primary" />Contact</a></li>
            </ul>
        </div>

        <div
            class="transition-all delay-300 duration-700 ease-out"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-[0.18em] text-primary">Head Office</h3>
            <ul class="space-y-3 text-sm text-white/85">
                <li>
                    <p class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wide text-primary/90">
                        <x-site.icon name="map-pin" class="h-3.5 w-3.5" />Location
                    </p>
                    <p class="font-medium text-white">{{ config('richman.location') }}</p>
                    <p class="text-white/65">{{ config('richman.location_detail') }}</p>
                </li>
                <li>
                    <p class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wide text-primary/90">
                        <x-site.icon name="mail" class="h-3.5 w-3.5" />Write to us
                    </p>
                    @foreach (config('richman.emails') as $email)
                        <a href="mailto:{{ $email }}" class="footer-link block font-medium">{{ $email }}</a>
                    @endforeach
                </li>
                <li>
                    <p class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wide text-primary/90">
                        <x-site.icon name="phone" class="h-3.5 w-3.5" />Call / WhatsApp
                    </p>
                    <a href="tel:{{ config('richman.phone_e164') }}" class="footer-link inline-flex items-center gap-1.5 font-medium">
                        <x-site.icon name="phone" class="h-4 w-4 text-primary" />{{ config('richman.phone') }}
                    </a>
                    <a
                        href="{{ config('richman.whatsapp_url') }}?text={{ rawurlencode(config('richman.whatsapp_message')) }}"
                        class="mt-2 inline-flex items-center gap-2 rounded-full bg-[#25D366] px-3 py-1.5 text-sm font-semibold text-white transition hover:bg-[#1ebe57]"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <x-site.whatsapp-logo class="h-4 w-4" />WhatsApp
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10 bg-black/25">
        <div class="mx-auto flex max-w-6xl flex-col gap-3 px-4 py-4 text-sm text-white/70 sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
            <p>&copy; {{ date('Y') }} City Cab and Taxi Services. All rights reserved.</p>
            <div class="flex gap-4">
                <a href="{{ route('privacy') }}" class="footer-link">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="footer-link">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
