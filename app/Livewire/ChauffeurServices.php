<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.site')]
class ChauffeurServices extends Component
{
    public function render()
    {
        return view('livewire.chauffeur-services', [
            'faqs' => [
                [
                    'question' => 'Does City Cab offer private chauffeur hire in Nairobi?',
                    'answer' => 'Yes. We provide chauffeur-driven vehicles for city travel, business meetings, hotel transfers, and day-long itineraries across Nairobi.',
                ],
                [
                    'question' => 'Can I hire a driver by the hour or for a full day?',
                    'answer' => 'Yes. Share your schedule, stops, and preferred vehicle size when you enquire. We confirm availability and pricing before the booking.',
                ],
                [
                    'question' => 'What vehicles are available?',
                    'answer' => 'Our fleet includes 7-seat MPVs for families and executives, plus larger passenger vans for groups. See the fleet section on our homepage for current options.',
                ],
                [
                    'question' => 'How do I book a chauffeur?',
                    'answer' => 'Call, WhatsApp, or submit a ride request online. Include your pickup location, time, destination, and passenger count so we can confirm the right vehicle.',
                ],
            ],
        ])->layoutData([
            'seoTitle' => 'Chauffeur Service Nairobi | Private Driver Hire | City Cab',
            'seoDescription' => 'Book a professional chauffeur in Nairobi for city rides, meetings, and day hire. Comfortable MPVs and experienced local drivers. Open 24 hours — call or WhatsApp to arrange.',
            'canonicalUrl' => route('services.chauffeur'),
            'seoImage' => '/images/fleet/alphard.jpg',
        ]);
    }
}
