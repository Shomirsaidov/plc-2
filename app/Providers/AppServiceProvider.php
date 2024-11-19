<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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
        // Get the locale from the request or session (default to 'ru' if not found)
        $locale = request()->get('locale', Session::get('locale', 'ru'));

        // Set the application's locale
        App::setLocale($locale);

        // Store the locale in the session for future requests
        Session::put('locale', $locale);
    }
}
