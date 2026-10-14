<x-mail::message>
# Booking update

Hi {{ $booking->customer_name }},

Your City Cab and Taxi Services booking status is now **{{ ucfirst($booking->status) }}**.

**Destination:** {{ $booking->destination }}  
**Group size:** {{ $booking->group_size }}  
**Pickup date:** {{ $booking->preferred_date?->format('Y-m-d') ?: 'To be confirmed' }}

@if ($booking->notes)
**Notes from Richard:**  
{{ $booking->notes }}
@endif

If you have questions, reply to this email or call {{ config('richman.phone') }}.

Thanks,<br>
City Cab and Taxi Services
</x-mail::message>
