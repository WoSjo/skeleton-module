<?php

namespace WoSjo\:package_name;

use Illuminate\Support\ServiceProvider;

class :package_nameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {

            $this->copyConfig()
                ->copyRoutes()
                ->copyViews()
                ->copyAssets()
                ->copyTranslations()
                ->copyMigrations();
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/:package_name.php', ':package_name');
    }

    /**
     * @return $this
     */
    private function copyConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/:package_name.php' => config_path(':package_name.php'),
        ], 'config');
        return $this;
    }

    /**
     * @return $this
     */
    private function copyRoutes()
    {
        $this->loadroutesFrom(__DIR__ . '/../routes/web.php');
        return $this;
    }

    /**
     * @return $this
     */
    private function copyViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', ':package_name');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/:package_name'),
        ]);
        return $this;
    }

    /**
     * @return $this
     */
    private function copyAssets()
    {
        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/:package_name'),
        ], 'public');
        return $this;
    }

    /**
     * @return $this
     */
    private function copyTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/translations', ':package_name');
        return $this;
    }

    /**
     * @return $this
     */
    private function copyMigrations()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'migrations');
        return $this;
    }
}
