<?php

namespace Moon\Artisan\Console;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Foundation\Application;
use Moon\Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $bootstrappers = [];

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'Moon\Artisan\Console\Commands\Init',
        'Moon\Illuminate\Foundation\Console\ConsoleMakeCommand',
    ];

    public function __construct(Application $app, Dispatcher $events)
    {
        $configFile = getcwd().'/artisan-config.php';

        if (file_exists($configFile)) {
            $config = require_once $configFile;
            $this->commands = array_merge($this->commands, $config['commands']);
        }

        parent::__construct($app, $events);
    }
}
