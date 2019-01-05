<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'frontend.partials.header', 'App\Http\Composers\MainHeaderComposer'
        );
        view()->composer(
            'frontend.partials.footer', 'App\Http\Composers\FooterContactUsComposer'
        );
        view()->composer(
            'frontend.partials.header', 'App\Http\Composers\FooterContactUsComposer'
        );
        view()->composer(
            'frontend.partials.footer', 'App\Http\Composers\FooterMenuComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
