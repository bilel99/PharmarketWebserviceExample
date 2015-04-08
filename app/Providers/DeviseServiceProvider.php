<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App;

class DeviseServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        \App::bind('devise', 'App\Devise');

    }
}