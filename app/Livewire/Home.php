<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.site')]
#[Title('City Cab and Taxi Services - Chauffeur-Driven Transport in Nairobi')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'heroImages' => [
                'images/hero/nairobi-city-drive.jpg',
                'images/hero/nairobi-westlands.jpg',
                'images/hero/nairobi-night-cbd.jpg',
                'images/hero/kenya-safari-road.jpg',
            ],
            'fleet' => [
                [
                    'name' => 'Toyota Noah',
                    'seats' => '7 seats',
                    'image' => 'images/fleet/noah.jpg',
                    'body' => 'Spacious MPV for airport runs, families, and small groups — luggage-friendly with comfortable seating.',
                    'best_for' => 'Airport & family',
                ],
                [
                    'name' => 'Toyota Wish',
                    'seats' => '7 seats',
                    'image' => 'images/fleet/toyota-wish.jpg',
                    'body' => 'Comfortable city and airport MPV for chauffeur-driven rides, corporate collections, and everyday transfers.',
                    'best_for' => 'City & transfers',
                ],
                [
                    'name' => 'Executive MPV',
                    'seats' => '7 seats',
                    'image' => 'images/fleet/alphard.jpg',
                    'body' => 'Premium chauffeur-driven comfort for executives, hotel transfers, and guests who want a quieter, refined ride.',
                    'best_for' => 'VIP & corporate',
                ],
                [
                    'name' => 'Nissan Passenger Van',
                    'seats' => '14+ seats',
                    'image' => 'images/fleet/nissan-van.jpg',
                    'body' => 'High-roof group transport for safaris, excursions, corporate shuttles, and country-wide trips with room for luggage.',
                    'best_for' => 'Groups & safaris',
                ],
            ],
            'services' => [
                [
                    'title' => 'Chauffeur-Driven',
                    'body' => 'Professional drivers on demand for city rides, meetings, and day-long itineraries — open 24 hours.',
                    'icon' => 'key',
                ],
                [
                    'title' => 'Airport Transfers',
                    'body' => 'JKIA and Wilson Airport meet-and-greet, flight tracking on request, and door-to-door drop-offs.',
                    'icon' => 'plane',
                ],
                [
                    'title' => 'Corporate Leasing',
                    'body' => 'Dedicated chauffeur vehicles for offices, client collections, and ongoing business travel needs.',
                    'icon' => 'briefcase',
                ],
                [
                    'title' => 'Excursions',
                    'body' => 'Day trips and scenic outings planned around your schedule, with comfortable vehicles and local knowledge.',
                    'icon' => 'map',
                ],
                [
                    'title' => 'Country-Wide Transport',
                    'body' => 'Reliable intercity and upcountry travel across Kenya — Naivasha, Nakuru, Mombasa runs, and more.',
                    'icon' => 'road',
                ],
                [
                    'title' => 'Safaris & VIP Transport',
                    'body' => 'Safari transfers and discreet VIP movements with well-kept vehicles sized for comfort and luggage.',
                    'icon' => 'calendar',
                ],
            ],
        ]);
    }
}
