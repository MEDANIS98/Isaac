<?php

declare(strict_types=1);

namespace App\Providers;

use GeniusTS\HijriDate\Date;
use Illuminate\Support\ServiceProvider;
use GeniusTS\HijriDate\Translations\Arabic;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Date::setTranslation(new Arabic);
        $today = Date::today();
        $date = $today->format('D d / M / Y ');
        $today = $today->format('D d / M / Y - ').today()->isoFormat('ll');
        view()->composer('layouts.topbar', fn ($view) => $view->with('today', $today));
        view()->composer('layouts.footer', fn ($view) => $view->with('today', $date));
    }
}
