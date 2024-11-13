<?php

namespace Lucap\DaneaEasyfatt;

use Illuminate\Support\ServiceProvider;

class DaneaEasyfattServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Here we can bind classes or services to the Laravel service container
        $this->app->bind('danea-easyfatt', function() {
            return new DaneaEasyfattService();
        });
    }

    public function boot()
    {
        // Boot any package-specific functionality here
        // You could load routes, views, or configurations here if needed
        // For now, let’s just log a message to confirm it’s working
        \Log::info('DaneaEasyfattServiceProvider booted!');
    }
}
