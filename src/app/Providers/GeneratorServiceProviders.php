<?php

namespace HaiCS\Laravel\Generator\Providers;

use HaiCS\Laravel\Generator\Commands\CommandGeneratorCommand;
use Illuminate\Support\ServiceProvider;

/**
 * Generator service provider
 */
class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * Register any package commands
     *
     * @return void
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CommandGeneratorCommand::class,
            ]);
        }
    }
}
