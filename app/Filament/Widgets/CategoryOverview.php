<?php

namespace App\Filament\Widgets;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoryOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCategories = Category::count();
        $totalPosts = Post::count();
        $totalAds = Ad::count();
        return [
            Stat::make('Total Categories', $totalCategories),
            Stat::make('Total Posts', $totalPosts),
            Stat::make('Total Ads', $totalAds),
        ];
    }
}
