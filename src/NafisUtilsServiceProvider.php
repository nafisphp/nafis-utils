<?php

namespace Nafisphp\NafisUtils;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nafisphp\NafisUtils\Commands\NafisUtilsCommand;

class NafisUtilsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nafis-utils')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nafis-utils_table')
            ->hasCommand(NafisUtilsCommand::class);
    }
}
