<x-mail::message>
# New booking request

**Customer:** {{ $booking->customer_name }}  
**Email:** {{ $booking->customer_email }}  
**Phone:** {{ $booking->customer_phone ?: 'Not provided' }}  
**Destination:** {{ $booking->destination }}  
**Group size:** {{ $booking->group_size }}  
**Pickup date:** {{ $booking->preferred_date?->format('Y-m-d') ?: 'Flexible' }}  

**Special requests:**  
{{ $booking->special_requests ?: 'None' }}

<x-mail::button :url="url('/admin/bookings/'.$booking->id.'/edit')">
View in admin
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
