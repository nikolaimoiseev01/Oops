<?php

namespace App\Providers;

use App\Models\GoodCategory;
use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::registerStyles([
            'https://unpkg.com/tippy.js@6/dist/tippy.css',
            asset('css/admin.css'),
        ]);

        view()->composer('*', function ($view) {
            $good_cats = GoodCategory::orderBy('title')->get();
            $view->with([
                'good_cats' => $good_cats,
            ]);
        });
    }


}
