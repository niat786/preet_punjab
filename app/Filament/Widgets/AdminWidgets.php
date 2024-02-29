<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Poet;
use App\Models\Poetry;
use App\Models\Comment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;

class AdminWidgets extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Stat::make('Total Users', User::count()),
            Stat::make('Users Registered Today', User::whereDate('created_at', today())->count()),
            Card::make('Total Poets', Poet::count()),
            Card::make('Total Poetry', Poetry::count()),
        ];
    }

}
