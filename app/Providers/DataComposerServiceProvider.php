<?php

namespace App\Providers;

use App\Models\CallNumber;
use App\Models\PrivacyPolicy;
use App\Models\TermsOfservice;
use Illuminate\Support\ServiceProvider;

class DataComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $data = [
                'callNumber' => CallNumber::where('id', 1)->first(),
                'termsOfservice' => TermsOfservice::where('id', 1)->first(),
                'privacyPolicy' => PrivacyPolicy::where('id', 1)->first(),
            ];

            $view->with($data);
        });
    }
}
