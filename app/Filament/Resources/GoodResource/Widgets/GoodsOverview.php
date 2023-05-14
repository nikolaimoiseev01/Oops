<?php

namespace App\Filament\Resources\GoodResource\Widgets;

use App\Models\Consultation;
use App\Models\Good;
use App\Models\Post;
use App\Models\ShopOffline;
use Filament\Forms\Components\Grid;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class GoodsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Новых заявок', Consultation::where('consult_status_id', 1)->count()),
            Card::make('Товаров', Good::all()->count()),
            Card::make('Статей', Post::all()->count()),
            Card::make('Оффлайн магазинов', ShopOffline::all()->count()),
        ];
    }
}
