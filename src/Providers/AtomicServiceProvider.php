<?php

namespace NumaxLab\Atomic\Laravel\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AtomicServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::anonymousComponentPath(__DIR__ . '/../../resources/views/components', 'numaxlab-atomic');
    }

    public function register(): void {}
}
