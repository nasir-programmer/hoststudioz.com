<?php

namespace App\Providers;

use Storage;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use VladimirYuldashev\Flysystem\CurlFtpAdapter;


class CurlFtpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Storage::extend('curl-ftp', function ($app, $config) {
        //     $adapter = new CurlFtpAdapter($config);
        //     return new Filesystem($adapter);
        // });
    }
}
