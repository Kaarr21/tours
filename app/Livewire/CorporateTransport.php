<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.site')]
class CorporateTransport extends Component
{
    public function render()
    {
        return view('livewire.corporate-transport', [
            'faqs' => [
                [
                    'question' => 'Does City Cab provide corporate transport in Nairobi?',
                    'answer' => 'Yes. We support staff movements, client pickups, hotel collections, and recurring business travel needs with dedicated chauffeur-driven vehicles.',
                ],
                [
                    'question' => 'Can companies arrange recurring bookings?',
                    'answer' => 'Yes. Tell us your usual routes, schedules, and preferred vehicles. We confirm arrangements that fit your office calendar.',
                ],
                [
                    'question' => 'Do you handle airport collections for visiting clients?',
                    'answer' => 'Yes. We arrange JKIA and Wilson Airport meet-and-greet transfers for guests and executives, then continue to offices, hotels, or meeting venues.',
                ],
                [
                    'question' => 'How do corporate enquiries work?',
                    'answer' => 'Email or WhatsApp with company name, routes, frequency, and passenger counts. We reply with vehicle options and a clear quote process.',
                ],
            ],
        ])->layoutData([
            'seoTitle' => 'Corporate Transport Nairobi | Business Car Hire | City Cab',
            'seoDescription' => 'Corporate chauffeur transport in Nairobi for staff, clients, and executive travel. Airport collections, recurring bookings, and comfortable fleet options. Request a quote today.',
            'canonicalUrl' => route('services.corporate'),
            'seoImage' => '/images/fleet/alphard.jpg',
        ]);
    }
}
