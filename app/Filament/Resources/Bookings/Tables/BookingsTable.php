<?php

namespace App\Filament\Resources\Bookings\Tables;

use App\Mail\BookingStatusNotification;
use App\Models\Booking;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('customer_name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('customer_email')
                    ->searchable(),
                TextColumn::make('destination')
                    ->searchable()
                    ->wrap(),
                TextColumn::make('group_size')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('preferred_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'success',
                        'cancelled' => 'danger',
                        'completed' => 'info',
                        default => 'gray',
                    }),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(Booking::STATUSES),
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('notify')
                    ->label('Email customer')
                    ->icon('heroicon-o-envelope')
                    ->requiresConfirmation()
                    ->action(function (Booking $record): void {
                        Mail::to($record->customer_email)->send(new BookingStatusNotification($record));

                        Notification::make()
                            ->title('Notification sent')
                            ->body('Booking update emailed to '.$record->customer_email)
                            ->success()
                            ->send();
                    }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
