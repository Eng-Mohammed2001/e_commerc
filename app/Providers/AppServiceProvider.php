<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);
        Paginator::useBootstrapThree();

        $ip = request()->ip();
        if ($ip == '127.0.0.1') {
            $ip = '185.132.250.112';
        }

        $country = Http::get('http://www.geoplugin.net/json.gp?ip=' . $ip)->json();

        $weather = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $country['geoplugin_regionName'] . '&appid=f198227b8dcd588a1efde77e7d34ce4e&units=metric')->json();

        // dd( $weather);
        View::share('weather', $weather);
    }
}
