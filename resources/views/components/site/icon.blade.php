@props([
    'name',
    'class' => 'h-5 w-5',
])

@php
    $map = [
        'home' => 'heroicon-o-home',
        'plane' => 'heroicon-o-paper-airplane',
        'key' => 'heroicon-o-key',
        'briefcase' => 'heroicon-o-briefcase',
        'truck' => 'heroicon-o-truck',
        'question' => 'heroicon-o-question-mark-circle',
        'calendar' => 'heroicon-o-calendar',
        'phone' => 'heroicon-o-phone',
        'whatsapp' => 'heroicon-o-chat-bubble-left-right',
        'mail' => 'heroicon-o-envelope',
        'map-pin' => 'heroicon-o-map-pin',
        'clock' => 'heroicon-o-clock',
        'arrow-right' => 'heroicon-o-arrow-right',
        'check' => 'heroicon-o-check-circle',
        'users' => 'heroicon-o-users',
        'paper-airplane' => 'heroicon-o-paper-airplane',
        'chat' => 'heroicon-o-chat-bubble-left-right',
        'sparkles' => 'heroicon-o-sparkles',
        'menu' => 'heroicon-o-bars-3',
        'chevron-right' => 'heroicon-o-chevron-right',
    ];

    $component = $map[$name] ?? 'heroicon-o-sparkles';
@endphp

<x-dynamic-component :component="$component" {{ $attributes->class($class) }} />
