<?php

namespace App\Providers;

use App\Models\Roomtype;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('adminUrl',getenv('ADMIN_URL'));
        View::share('publicUrl',getenv('PUBLIC_URL'));
        $roomtypes = Roomtype::limit(4)->get();
        View::share('roomtypes', $roomtypes);
    }
}
