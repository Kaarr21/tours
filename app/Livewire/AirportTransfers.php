<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.site')]
class AirportTransfers extends Component
{
    public function render()
    {
        return view('livewire.airport-transfers', [
            'faqs' => [
                [
                    'question' => 'Does City Cab and Taxi offer JKIA airport transfers?',
                    'answer' => 'Yes. We provide chauffeur-driven pickups and drop-offs at Jomo Kenyatta International Airport (JKIA), including meet-and-greet arrangements when requested.',
                ],
                [
                    'question' => 'Do you serve Wilson Airport as well?',
                    'answer' => 'Yes. We arrange transfers to and from Wilson Airport for domestic and light-aircraft travellers.',
                ],
                [
                    'question' => 'Can I book a taxi from JKIA to Westlands or the Nairobi CBD?',
                    'answer' => 'Yes. We offer door-to-door transfers from JKIA and Wilson Airport to Westlands, the CBD, hotels, and other Nairobi destinations. Share your flight details and drop-off point when you book.',
                ],
                [
                    'question' => 'How do I confirm the fare?',
                    'answer' => 'Call or WhatsApp with your pickup time, destination, passenger count, and luggage needs. We confirm the vehicle and quote before you travel.',
                ],
            ],
        ])->layoutData([
            'seoTitle' => 'Nairobi Airport Transfers | JKIA & Wilson | City Cab and Taxi',
            'seoDescription' => 'Arrange JKIA and Wilson Airport transfers in Nairobi with City Cab and Taxi. Meet-and-greet, flight tracking on request, and door-to-door drop-offs. Call or WhatsApp for a quote.',
            'canonicalUrl' => route('services.airport-transfers'),
            'seoImage' => '/images/hero/nairobi-city-drive.jpg',
        ]);
    }
}
