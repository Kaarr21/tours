<?php

$primaryEmail = env('RICHMAN_EMAIL', 'richkaroki@gmail.com');
$altEmail = env('RICHMAN_EMAIL_ALT', 'richmantours2024@gmail.com');
$phoneDisplay = env('RICHMAN_PHONE', '+254184491402');

$parseEmails = static function (?string $value): array {
    return collect(explode(',', (string) $value))
        ->map(fn (string $email): string => trim($email))
        ->filter()
        ->unique()
        ->values()
        ->all();
};

$toE164 = static function (string $phone): string {
    $digits = preg_replace('/\D+/', '', $phone) ?? '';

    if (str_starts_with($digits, '254')) {
        return '+'.$digits;
    }

    if (str_starts_with($digits, '0')) {
        return '+254'.substr($digits, 1);
    }

    return '+254'.$digits;
};

$phoneE164 = env('RICHMAN_PHONE_E164', $toE164($phoneDisplay));

return [
    'business_name' => 'City Cab and Taxi Services',
    'booking_notify_emails' => $parseEmails(
        env('BOOKING_NOTIFY_EMAIL', "{$primaryEmail},{$altEmail}")
    ),
    'contact_notify_emails' => $parseEmails(
        env('CONTACT_NOTIFY_EMAIL', "{$primaryEmail},{$altEmail}")
    ),
    'phone' => $phoneDisplay,
    'phone_e164' => $phoneE164,
    'whatsapp_url' => env(
        'RICHMAN_WHATSAPP_URL',
        'https://wa.me/'.ltrim((string) $phoneE164, '+')
    ),
    'whatsapp_message' => env(
        'RICHMAN_WHATSAPP_MESSAGE',
        'Hello City Cab and Taxi — I would like to book a ride.'
    ),
    'email' => $primaryEmail,
    'emails' => array_values(array_unique(array_filter([$primaryEmail, $altEmail]))),
    'location' => 'Nairobi, Kenya',
    'location_detail' => 'Central Business District',
    'address_locality' => 'Nairobi',
    'address_country' => 'KE',
    'area_served' => ['Nairobi', 'Kenya'],
    'open_24_hours' => true,
    'description' => 'Chauffeur-driven transport, airport transfers, corporate leasing, excursions, country-wide travel, safaris, and VIP transport in Nairobi and across Kenya. Open 24 hours.',
];
