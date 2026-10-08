<?php

namespace App\Filament\Resources\Bookings\Schemas;

use App\Models\Booking;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('customer_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('customer_phone')
                    ->tel()
                    ->maxLength(40),
                TextInput::make('destination')
                    ->required()
                    ->maxLength(255),
                TextInput::make('group_size')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(9),
                DatePicker::make('preferred_date'),
                Textarea::make('special_requests')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(Booking::STATUSES)
                    ->required()
                    ->default('pending'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
