<?php

namespace App\Providers;

use App\Models\AgencyService;
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
        View::composer('*', function ($view) {
            if (auth()->check()) {
                // get agency services where role user is agency slug
                $agencyServices = AgencyService::whereHas('agency', function ($query) {
                    $query->where('slug', auth()->user()->getRoleNames()[0]);
                })->get();
                $view->with('agencyServices', $agencyServices);
            }
        });
    }
}
