<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'customer_name',
    'customer_email',
    'customer_phone',
    'destination',
    'group_size',
    'preferred_date',
    'special_requests',
    'status',
    'notes',
])]
class Booking extends Model
{
    public const STATUSES = [
        'pending' => 'Pending',
        'confirmed' => 'Confirmed',
        'cancelled' => 'Cancelled',
        'completed' => 'Completed',
    ];

    protected function casts(): array
    {
        return [
            'preferred_date' => 'date',
            'group_size' => 'integer',
        ];
    }
}
