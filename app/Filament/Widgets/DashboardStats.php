<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Property;
use App\Models\Booking;

class DashboardStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Propriétés', Property::count())
                ->description('Total')
                ->color('primary'),

            Card::make('Réservations', Booking::count())
                ->description('Total')
                ->color('secondary'),
        ];
    }
}
