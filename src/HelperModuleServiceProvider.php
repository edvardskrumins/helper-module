<?php

namespace TetOtt\HelperModule;

use Illuminate\Support\ServiceProvider;

/**
 * Helper Module Service Provider
 */
class HelperModuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);
    }
}

