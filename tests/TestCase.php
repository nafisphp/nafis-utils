<?php

namespace Nafisphp\NafisUtils\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nafisphp\NafisUtils\NafisUtilsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nafisphp\\NafisUtils\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            NafisUtilsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_nafis-utils_table.php.stub';
        $migration->up();
        */
    }
}
