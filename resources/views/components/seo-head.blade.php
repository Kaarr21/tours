@props([
    'title' => null,
    'description' => null,
    'canonical' => null,
    'robots' => null,
    'image' => null,
])

@php
    $seoTitle = $title ?? config('seo.defaults.title');
    $seoDescription = $description ?? config('seo.defaults.description');
    $canonicalUrl = $canonical ?? url()->current();
    $robotsDirective = $robots ?? config('seo.defaults.robots');
    $socialImage = $image ?? config('seo.defaults.image');
    $socialImageUrl = str_starts_with((string) $socialImage, 'http')
        ? $socialImage
        : rtrim((string) config('seo.base_url'), '/').'/'.ltrim((string) $socialImage, '/');
@endphp

<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="robots" content="{{ $robotsDirective }}">
<link rel="canonical" href="{{ $canonicalUrl }}">

<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ config('seo.site_name') }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:image" content="{{ $socialImageUrl }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $socialImageUrl }}">
