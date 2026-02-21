<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Website Views', \App\Models\PageVisit::count())
                ->description('Total page views across all routes')
                ->descriptionIcon('heroicon-m-eye')
                ->color('primary'),
            Stat::make('Received Messages', \App\Models\Message::count())
                ->description('Total contact form submissions')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),
        ];
    }
}
