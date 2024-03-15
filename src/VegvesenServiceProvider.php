<?php

namespace Eeappdev\Vegvesen;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class VegvesenServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/vegvesen.php' => config_path('vegvesen.php'),
        ], 'config');

        Http::macro('vegvesen', function () {
            return Http::withHeaders([
                'Content-Type' => 'application/json',
                'SVV-Authorization' => config('vegvesen.token'),
            ])->baseUrl(config('vegvesen.baseurl'));
        });
    }
}
