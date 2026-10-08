<x-mail::message>
# New contact message

**From:** {{ $contactMessage->full_name }}  
**Email:** {{ $contactMessage->email }}  
**Phone:** {{ $contactMessage->phone ?: 'Not provided' }}  
**Subject:** {{ $contactMessage->subject }}  

**Message:**  
{{ $contactMessage->message }}

<x-mail::button :url="url('/admin')">
Open admin
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
