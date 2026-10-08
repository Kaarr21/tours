@php
    $links = [
        ['label' => 'Home', 'route' => 'home', 'url' => null],
        ['label' => 'Services', 'route' => null, 'url' => route('home').'#services'],
        ['label' => 'Fleet', 'route' => null, 'url' => route('home').'#fleet'],
        ['label' => 'Book a Ride', 'route' => 'book-tour', 'url' => null],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-border/60 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <x-site.logo />

        <nav class="hidden items-center gap-6 md:flex">
            @foreach ($links as $link)
                @php $href = $link['url'] ?? route($link['route']); @endphp
                <a
                    href="{{ $href }}"
                    @class([
                        'text-sm font-medium transition',
                        'text-primary' => $link['route'] && request()->routeIs($link['route']),
                        'text-foreground/80 hover:text-primary' => ! ($link['route'] && request()->routeIs($link['route'])),
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        <details class="relative md:hidden">
            <summary class="list-none inline-flex cursor-pointer items-center justify-center rounded-md border border-border px-3 py-2 text-sm text-foreground [&::-webkit-details-marker]:hidden">
                <span class="sr-only">Toggle menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </summary>
            <div class="absolute right-0 mt-2 w-56 rounded-lg border border-border bg-white p-3 shadow-lg">
                <div class="flex flex-col gap-3">
                    @foreach ($links as $link)
                        @php $href = $link['url'] ?? route($link['route']); @endphp
                        <a href="{{ $href }}" class="text-sm font-medium text-foreground/80">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </details>
    </div>
</header>
