<?php

namespace Moon\Artisan\Stub;

use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Moon\Artisan\Artisan;

class Application extends Container implements ApplicationContract
{
    public function getNamespace()
    {
        return 'Artisan';
    }

    public function loadDeferredProviders()
    {
    }

    public function hasBeenBootstrapped()
    {
        return true;
    }
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
    }

    /**
     * Get the base path of the Laravel installation.
     *
     * @return string
     */
    public function basePath()
    {
    }

    /**
     * Get or check the current application environment.
     *
     * @param  mixed
     *
     * @return string
     */
    public function environment()
    {
    }

    /**
     * Determine if the application is currently down for maintenance.
     *
     * @return bool
     */
    public function isDownForMaintenance()
    {
    }

    /**
     * Register all of the configured providers.
     */
    public function registerConfiguredProviders()
    {
    }

    /**
     * Register a service provider with the application.
     *
     * @param \Illuminate\Support\ServiceProvider|string $provider
     * @param array                                      $options
     * @param bool                                       $force
     *
     * @return \Illuminate\Support\ServiceProvider
     */
    public function register($provider, $options = [], $force = false)
    {
    }

    /**
     * Register a deferred provider and service.
     *
     * @param string $provider
     * @param string $service
     */
    public function registerDeferredProvider($provider, $service = null)
    {
    }

    /**
     * Boot the application's service providers.
     */
    public function boot()
    {
    }

    /**
     * Register a new boot listener.
     *
     * @param mixed $callback
     */
    public function booting($callback)
    {
    }

    /**
     * Register a new "booted" listener.
     *
     * @param mixed $callback
     */
    public function booted($callback)
    {
    }

    /**
     * Get the path to the cached "compiled.php" file.
     *
     * @return string
     */
    public function getCachedCompilePath()
    {
    }

    /**
     * Get the path to the cached services.json file.
     *
     * @return string
     */
    public function getCachedServicesPath()
    {
    }
}
