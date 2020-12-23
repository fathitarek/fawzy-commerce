<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\settings;
use App\Models\social;
use App\Models\about_us;
use App\Models\sucess_stories;
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
        $about_us=about_us::get();
        $sucess_stories=sucess_stories::latest()->limit(6)->get();
        view()->share('social',$social);
        view()->share('settings',$settings);
        view()->share('about_us',$about_us);
        view()->share('sucess_stories',$sucess_stories);
     }
}
