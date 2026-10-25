<?php

return [
    'site_name' => 'City Cab and Taxi Services',
    'base_url' => rtrim((string) env('APP_URL', 'https://citycabandtaxi.co.ke'), '/'),

    'defaults' => [
        'title' => 'City Cab & Taxi Nairobi | Airport Transfers & Chauffeur',
        'description' => 'Book chauffeur-driven taxi services in Nairobi, JKIA and Wilson Airport transfers, corporate transport and private trips across Kenya. Call or WhatsApp to request a quote.',
        'robots' => 'index, follow',
        'image' => '/images/hero/nairobi-city-drive.jpg',
    ],
];
