<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Location;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookingStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Bookings', (string) Booking::query()->count())
                ->description('All booking requests')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('primary'),
            Stat::make('Pending Bookings', (string) Booking::query()->where('status', 'pending')->count())
                ->description('Awaiting confirmation')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
            Stat::make('Confirmed Bookings', (string) Booking::query()->where('status', 'confirmed')->count())
                ->description('Ready to go')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
            Stat::make('Locations', (string) Location::query()->count())
                ->description('Saved routes & areas')
                ->descriptionIcon('heroicon-m-map-pin')
                ->color('info'),
        ];
    }
}
