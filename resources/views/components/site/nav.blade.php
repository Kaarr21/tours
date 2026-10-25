@php
    $links = [
        ['label' => 'Home', 'route' => 'home', 'url' => null, 'icon' => 'home'],
        ['label' => 'Airport', 'route' => 'services.airport-transfers', 'url' => null, 'icon' => 'plane'],
        ['label' => 'Chauffeur', 'route' => 'services.chauffeur', 'url' => null, 'icon' => 'key'],
        ['label' => 'Corporate', 'route' => 'services.corporate', 'url' => null, 'icon' => 'briefcase'],
        ['label' => 'Fleet', 'route' => null, 'url' => route('home').'#fleet', 'icon' => 'truck'],
        ['label' => 'FAQs', 'route' => 'faqs', 'url' => null, 'icon' => 'question'],
        ['label' => 'Book a Ride', 'route' => 'book-tour', 'url' => null, 'icon' => 'calendar'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-border/60 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <x-site.logo />

        <nav class="hidden items-center gap-4 xl:gap-5 lg:flex">
            @foreach ($links as $link)
                @php $href = $link['url'] ?? route($link['route']); @endphp
                <a
                    href="{{ $href }}"
                    @class([
                        'inline-flex items-center gap-1.5 text-sm font-medium transition',
                        'text-primary' => $link['route'] && request()->routeIs($link['route']),
                        'text-foreground/80 hover:text-primary' => ! ($link['route'] && request()->routeIs($link['route'])),
                    ])
                >
                    <x-site.icon :name="$link['icon']" class="h-4 w-4 shrink-0 opacity-80" />
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        <details class="relative lg:hidden">
            <summary class="list-none inline-flex cursor-pointer items-center justify-center rounded-md border border-border px-3 py-2 text-sm text-foreground [&::-webkit-details-marker]:hidden">
                <span class="sr-only">Toggle menu</span>
                <x-site.icon name="menu" class="h-5 w-5" />
            </summary>
            <div class="absolute right-0 mt-2 w-60 rounded-lg border border-border bg-white p-3 shadow-lg">
                <div class="flex flex-col gap-1">
                    @foreach ($links as $link)
                        @php $href = $link['url'] ?? route($link['route']); @endphp
                        <a href="{{ $href }}" class="inline-flex items-center gap-2 rounded-md px-2 py-2 text-sm font-medium text-foreground/80 hover:bg-muted hover:text-primary">
                            <x-site.icon :name="$link['icon']" class="h-4 w-4 text-primary" />
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </details>
    </div>
</header>
