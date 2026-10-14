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
                href="tel:{{ preg_replace('/\s+/', '', config('richman.phone')) }}"
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
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-[0.18em] text-primary">Working Hours</h3>
            <ul class="space-y-3 text-sm text-white/85">
                <li>
                    <p class="font-medium text-white">Every day</p>
                    <p class="text-white/65">Open 24 hours</p>
                </li>
                <li>
                    <p class="font-medium text-white">Bookings</p>
                    <p class="text-white/65">Advance booking preferred</p>
                </li>
            </ul>
        </div>

        <div
            class="transition-all delay-200 duration-700 ease-out"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-[0.18em] text-primary">Quick Links</h3>
            <ul class="space-y-2 text-sm text-white/85">
                <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                <li><a href="{{ route('home') }}#services" class="footer-link">Services</a></li>
                <li><a href="{{ route('home') }}#fleet" class="footer-link">Our Fleet</a></li>
                <li><a href="{{ route('book-tour') }}" class="footer-link">Book a Ride</a></li>
                <li><a href="{{ route('home') }}#contact" class="footer-link">Contact</a></li>
            </ul>
        </div>

        <div
            class="transition-all delay-300 duration-700 ease-out"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-[0.18em] text-primary">Head Office</h3>
            <ul class="space-y-3 text-sm text-white/85">
                <li>
                    <p class="text-xs font-semibold uppercase tracking-wide text-primary/90">Location</p>
                    <p class="font-medium text-white">{{ config('richman.location') }}</p>
                    <p class="text-white/65">{{ config('richman.location_detail') }}</p>
                </li>
                <li>
                    <p class="text-xs font-semibold uppercase tracking-wide text-primary/90">Write to us</p>
                    @foreach (config('richman.emails') as $email)
                        <a href="mailto:{{ $email }}" class="footer-link block font-medium">{{ $email }}</a>
                    @endforeach
                </li>
                <li>
                    <p class="text-xs font-semibold uppercase tracking-wide text-primary/90">Call / WhatsApp</p>
                    <a href="tel:{{ preg_replace('/\s+/', '', config('richman.phone')) }}" class="footer-link font-medium">{{ config('richman.phone') }}</a>
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
