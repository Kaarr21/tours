<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.site')]
class Faqs extends Component
{
    public function render()
    {
        return view('livewire.faqs', [
            'faqs' => [
                [
                    'question' => 'What services does City Cab and Taxi provide?',
                    'answer' => 'We provide chauffeur-driven transport in Nairobi and across Kenya, including airport transfers, private chauffeur hire, corporate transport, excursions, intercity trips, safaris, and VIP movements. We are open 24 hours.',
                ],
                [
                    'question' => 'Where is the service available?',
                    'answer' => 'Our base is Nairobi. We cover city rides, JKIA and Wilson Airport transfers, and country-wide journeys to destinations such as Naivasha, Nakuru, and Mombasa when booked in advance.',
                ],
                [
                    'question' => 'What vehicles are available for families and groups?',
                    'answer' => 'We operate 7-seat MPVs suited to airport luggage and family travel, executive MPVs for premium rides, and passenger vans with 14+ seats for groups and safari transfers.',
                ],
                [
                    'question' => 'How do I book a ride or request a quotation?',
                    'answer' => 'Call or WhatsApp '.config('richman.phone').', email '.config('richman.email').', or submit the online ride request form. Share pickup time, destination, passenger count, and luggage needs so we can confirm the vehicle and fare.',
                ],
                [
                    'question' => 'Does City Cab offer JKIA airport transfers?',
                    'answer' => 'Yes. We arrange JKIA and Wilson Airport pickups and drop-offs, with meet-and-greet and flight tracking available on request.',
                ],
                [
                    'question' => 'Does City Cab offer corporate transport and chauffeur hire?',
                    'answer' => 'Yes. We support corporate leasing, client collections, staff transport, and private chauffeur hire for meetings and day-long itineraries.',
                ],
            ],
        ])->layoutData([
            'seoTitle' => 'FAQs | Booking, Airport Transfers & Fleet | City Cab and Taxi',
            'seoDescription' => 'Answers about City Cab and Taxi services in Nairobi: airport transfers, chauffeur hire, corporate transport, vehicles, pricing quotes, and how to book by phone or WhatsApp.',
            'canonicalUrl' => route('faqs'),
            'seoImage' => config('seo.defaults.image'),
        ]);
    }
}
