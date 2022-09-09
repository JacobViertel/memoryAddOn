<?php

namespace RBMH\Announcement;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../dist/js/announcement.js',
    ];

    protected $stylesheets = [
        __DIR__ . '/../dist/css/announcement.css',
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
