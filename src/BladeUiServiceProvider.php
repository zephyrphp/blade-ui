<?php

namespace Zephyr\BladeUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bootConfig();
        $this->bootViews();
    }

    public function register(): void
    {
        $this->registerConfig();
    }

    protected function bootConfig(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/blade-ui.php' => config_path('blade-ui.php'),
            ], 'blade-ui-config');
        }
    }

    protected function bootViews(): void
    {
        $namespace = config('blade-ui.namespace', 'ui');

        if (file_exists(resource_path('vendor/zephyrphp/blade-ui/views'))) {
            Blade::anonymousComponentPath(resource_path('vendor/zephyrphp/blade-ui/views'), $namespace);
        }

        Blade::anonymousComponentPath(__DIR__.'/../resources/views', $namespace);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('vendor/zephyrphp/blade-ui/views'),
            ], 'blade-ui-views');
        }
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-ui.php', 'blade-ui');
    }
}
