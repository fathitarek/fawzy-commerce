<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\settings;
use App\Models\social;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
   
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $social=social::get();
        $settings=settings::get();
        view()->share('social',$social);
        view()->share('settings',$settings);
     }
}
