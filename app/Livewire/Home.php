<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.site')]
#[Title('Richman Cab & Hire - Taxi, Cab & Private Hire in Nairobi')]
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
                    'name' => 'Toyota Prado',
                    'seats' => '7 seats',
                    'image' => 'images/fleet/prado.jpg',
                    'body' => 'Capable SUV comfort for corporate collections, estate roads, and longer highway trips across Kenya.',
                    'best_for' => 'Corporate & highway',
                ],
                [
                    'name' => 'Executive MPV',
                    'seats' => '7 seats',
                    'image' => 'images/fleet/alphard.jpg',
                    'body' => 'Premium private hire for executives, hotel transfers, and guests who want a quieter, refined ride.',
                    'best_for' => 'Private & VIP',
                ],
                [
                    'name' => 'Land Cruiser',
                    'seats' => '7+ seats',
                    'image' => 'images/fleet/land-cruiser.jpg',
                    'body' => 'Built for out-of-town charters, safari-style roads, and groups that need extra space and confidence.',
                    'best_for' => 'Out-of-town',
                ],
            ],
            'services' => [
                [
                    'title' => 'Airport Pickups',
                    'body' => 'JKIA and Wilson Airport meet-and-greet, flight tracking on request, and door-to-door drop-offs.',
                    'icon' => 'plane',
                ],
                [
                    'title' => 'Corporate Travel',
                    'body' => 'Office shuttles, client collections, and same-day business runs with professional chauffeurs.',
                    'icon' => 'briefcase',
                ],
                [
                    'title' => 'Private Journeys',
                    'body' => 'Hourly or full-day hire for meetings, hospital runs, shopping days, and personal errands.',
                    'icon' => 'key',
                ],
                [
                    'title' => 'City Taxi & Cabs',
                    'body' => 'Point-to-point rides across Nairobi: CBD, Westlands, Karen, Kilimani, Syokimau, and estates.',
                    'icon' => 'map',
                ],
                [
                    'title' => 'Out-of-Town Charters',
                    'body' => 'Intercity and countryside trips — Naivasha, Nakuru, Mombasa runs, and weekend getaways.',
                    'icon' => 'road',
                ],
                [
                    'title' => 'Hotel & Event Transfers',
                    'body' => 'Reliable guest collections for hotels, conferences, weddings, and evening functions.',
                    'icon' => 'calendar',
                ],
            ],
        ]);
    }
}
