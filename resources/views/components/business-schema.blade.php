@php
    $baseUrl = rtrim((string) config('seo.base_url'), '/');
    $dayOfWeek = [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday',
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'TaxiService',
        '@id' => $baseUrl.'/#business',
        'name' => config('richman.business_name'),
        'url' => $baseUrl.'/',
        'telephone' => config('richman.phone_e164'),
        'email' => config('richman.email'),
        'description' => config('richman.description'),
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => config('richman.address_locality'),
            'addressCountry' => config('richman.address_country'),
        ],
        'areaServed' => collect(config('richman.area_served'))
            ->map(fn (string $name): array => [
                '@type' => $name === 'Kenya' ? 'Country' : 'City',
                'name' => $name,
            ])
            ->values()
            ->all(),
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => $dayOfWeek,
            'opens' => '00:00',
            'closes' => '23:59',
        ],
    ];
@endphp

<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
