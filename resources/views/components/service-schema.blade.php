@props([
    'name',
    'description',
    'url',
    'idSuffix' => 'service',
])

@php
    $baseUrl = rtrim((string) config('seo.base_url'), '/');
    $serviceUrl = str_starts_with((string) $url, 'http')
        ? $url
        : $baseUrl.'/'.ltrim((string) $url, '/');

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => $serviceUrl.'#'.$idSuffix,
        'name' => $name,
        'description' => $description,
        'url' => $serviceUrl,
        'provider' => [
            '@id' => $baseUrl.'/#business',
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => config('richman.address_locality'),
        ],
    ];
@endphp

<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
