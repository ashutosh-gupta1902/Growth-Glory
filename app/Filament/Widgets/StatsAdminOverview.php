<?php

namespace App\Filament\Widgets;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\ContactUs\ContactUs;
use App\Models\Content\Page;
use App\Models\Users\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count())
                ->description('All registered Users')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Posts', Post::query()->count())
                ->description('All Added Posts')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('danger'),
            Stat::make('Pages', Page::query()->count())
                ->description('All Added Pages')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary'),
            Stat::make('Contact Us', ContactUs::query()->count())
                ->description('All Contact Us Queries')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('warning'),
        ];
    }
}
