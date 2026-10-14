<?php

namespace App\Livewire;

use App\Mail\BookingSubmitted;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.site')]
#[Title('Book a Ride - City Cab and Taxi Services')]
class BookTour extends Component
{
    #[Validate('required|string|max:100')]
    public string $firstName = '';

    #[Validate('required|string|max:100')]
    public string $lastName = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('nullable|string|max:40')]
    public string $phone = '';

    #[Validate('required|string|max:255')]
    public string $destination = '';

    #[Validate('required|integer|min:1|max:9')]
    public string $groupSize = '';

    #[Validate('nullable|date|after_or_equal:today')]
    public string $preferredDate = '';

    #[Validate('nullable|string|max:2000')]
    public string $specialRequests = '';

    public function submit(): void
    {
        $this->validate();

        $booking = Booking::create([
            'customer_name' => trim("{$this->firstName} {$this->lastName}"),
            'customer_email' => $this->email,
            'customer_phone' => $this->phone ?: null,
            'destination' => $this->destination,
            'group_size' => (int) $this->groupSize,
            'preferred_date' => $this->preferredDate ?: null,
            'special_requests' => $this->specialRequests ?: null,
            'status' => 'pending',
        ]);

        $notifyEmails = config('richman.booking_notify_emails');

        if ($notifyEmails) {
            Mail::to($notifyEmails)->send(new BookingSubmitted($booking));
        }

        $this->reset([
            'firstName',
            'lastName',
            'email',
            'phone',
            'destination',
            'groupSize',
            'preferredDate',
            'specialRequests',
        ]);

        session()->flash('success', 'Ride request sent! Richard will call or WhatsApp you within 12 hours to confirm pickup details.');
    }

    public function render()
    {
        return view('livewire.book-tour');
    }
}
