<?php

$primaryEmail = env('RICHMAN_EMAIL', 'richkaroki@gmail.com');
$altEmail = env('RICHMAN_EMAIL_ALT', 'richmantours2024@gmail.com');

$parseEmails = static function (?string $value): array {
    return collect(explode(',', (string) $value))
        ->map(fn (string $email): string => trim($email))
        ->filter()
        ->unique()
        ->values()
        ->all();
};

return [
    'booking_notify_emails' => $parseEmails(
        env('BOOKING_NOTIFY_EMAIL', "{$primaryEmail},{$altEmail}")
    ),
    'contact_notify_emails' => $parseEmails(
        env('CONTACT_NOTIFY_EMAIL', "{$primaryEmail},{$altEmail}")
    ),
    'phone' => env('RICHMAN_PHONE', '0720912561'),
    'email' => $primaryEmail,
    'emails' => array_values(array_unique(array_filter([$primaryEmail, $altEmail]))),
    'location' => 'Nairobi, Kenya',
    'location_detail' => 'Central Business District',
];
