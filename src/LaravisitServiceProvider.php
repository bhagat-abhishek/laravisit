<?php

namespace Coderflex\Laravisit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravisitServiceProvider extends PackageServiceProvider
{
    
    public function boot()
    {
        // Publish a config file
        $this->publishes([
            __DIR__.'/../config/laravisit.php' => config_path('laravisit.php')
        ]);

        // Publish your migrations
        $this->publishes([
            __DIR__.'/../database/migrations/create_laravisits_table.php.stub' => database_path('/migrations/'.date('Y_m_d_His', time()). '_create_laravisits_table.php')
        ]);
    }
    
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravisit')
            ->hasConfigFile()
            ->hasMigration('create_laravisits_table');
    }
    
}
