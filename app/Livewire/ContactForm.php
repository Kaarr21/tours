<?php

namespace App\Livewire;

use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
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
    public string $subject = '';

    #[Validate('required|string|max:5000')]
    public string $message = '';

    public function submit(): void
    {
        $this->validate();

        $contact = ContactMessage::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone ?: null,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $notifyEmail = config('richman.contact_notify_email');

        if ($notifyEmail) {
            Mail::to($notifyEmail)->send(new ContactMessageReceived($contact));
        }

        $this->reset();

        session()->flash('success', 'Message sent! Richard typically replies within 2 hours about your ride.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
