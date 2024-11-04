<?php

namespace App\Filament\Widgets;

use App\Models\Kuesioner1;
use App\Models\Map;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserChartWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users: ', User::count())
                ->description('New user that have joined')
                ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
                ->chart([10, 10, 15, 18, 25, 30, 50])
                ->color('success'),

            Stat::make('Pinpoint: ', Map::count())
                ->description('Total pinpoin on map')
                ->descriptionIcon('heroicon-m-map-pin', IconPosition::Before)
                ->chart([15, 25, 25, 18, 25, 30, 50])
                ->color('warning'),

            Stat::make('Vote: ', Kuesioner1::count())
                ->description('User that voted')
                ->descriptionIcon('heroicon-m-check-circle', IconPosition::Before)
                ->chart([15, 15, 25, 30, 25, 30, 40])
                ->color('info'),
        ];
    }
}
