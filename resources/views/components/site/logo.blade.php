@props(['light' => false, 'compact' => false])

<a
    href="{{ route('home') }}"
    {{ $attributes->class([
        'group inline-flex items-center gap-2.5 font-semibold tracking-tight',
        $light ? 'text-white' : 'text-foreground',
    ]) }}
    aria-label="City Cab and Taxi Services home"
>
    <img
        src="{{ asset('images/brand/logo-mark.png') }}?v=noah"
        alt="City Cab and Taxi Services"
        width="40"
        height="40"
        class="h-9 w-9 shrink-0 rounded-full drop-shadow-sm transition duration-300 group-hover:scale-105 sm:h-10 sm:w-10"
    >

    @unless ($compact)
        <span class="leading-none">
            <span class="block text-base font-bold tracking-tight sm:text-lg">
                City Cab
            </span>
            <span @class([
                'mt-0.5 block text-[0.65rem] font-semibold uppercase tracking-[0.18em] sm:text-xs',
                $light ? 'text-white/75' : 'text-muted-foreground',
            ])>
                &amp; Taxi Services
            </span>
        </span>
    @endunless
</a>
