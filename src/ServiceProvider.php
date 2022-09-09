<?php

namespace RBMH\Memory;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../dist/js/memory.js',
    ];

    protected $routes = [
        'cp' => __DIR__ . '/../routes/cp.php',
    ];

    public function bootAddon()
    {   
        $globalConfigPath = config_path('rbmh');
        $this->publishes([__DIR__.'/../config/rbmh' => $globalConfigPath], 'config');
    }
}
