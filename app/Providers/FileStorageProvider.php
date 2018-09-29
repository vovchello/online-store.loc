<?php

namespace App\Providers;

use App\Contracts\FileStorageInterface;
use App\Servises\Filestorage\S3Filestorage;
use Illuminate\Support\ServiceProvider;

class FileStorageProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(FileStorageInterface::class, S3Filestorage::class);
    }
}
