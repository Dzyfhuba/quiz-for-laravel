<?php

namespace Dzyfhuba\QuizSys;

use Illuminate\Support\ServiceProvider;

class QuizSysServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'quiz-system-for-laravel');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'quiz-system-for-laravel');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations', 'quiz-system-for-laravel');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('quiz-system-for-laravel.php'),
            ], 'config');
            $this->publishes([
                __DIR__ . '/../database/seeders/' => database_path('seeders/'),
            ], 'seeds');
            $this->publishes([
                __DIR__ . '/../database/migrations/' => database_path('migrations/quiz-system-for-laravel'),
            ], 'migrations');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/quiz-system-for-laravel'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/quiz-system-for-laravel'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/quiz-system-for-laravel'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'quiz-system-for-laravel');

        // Register the main class to use with the facade
        $this->app->singleton('quiz-system-for-laravel', function () {
            return new QuizSys;
        });
    }
}
