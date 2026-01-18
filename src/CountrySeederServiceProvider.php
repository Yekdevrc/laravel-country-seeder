<?php

namespace Yekdev\CountrySeeder;

use Illuminate\Support\ServiceProvider;
use Yekdev\CountrySeeder\Seeders\CountrySeeder;
use Illuminate\Support\Facades\Artisan;

class CountrySeederServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        if ($this->app->runningInConsole()) {
            Artisan::call('db:seed', [
                '--class' => CountrySeeder::class,
                '--force' => true
            ]);
        }
    }

    public function register()
    {
        //
    }
}
