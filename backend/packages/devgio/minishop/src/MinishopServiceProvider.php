<?php

namespace Devgio\Minishop;

use Illuminate\Support\ServiceProvider;

class MinishopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.DIRECTORY_SEPARATOR."routes.php";
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
