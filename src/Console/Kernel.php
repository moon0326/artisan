<?php

namespace Artisan\Console;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $bootstrappers = [];

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'Artisan\Console\Commands\Init',
    ];

    public function __construct(Application $app, Dispatcher $events)
    {
        $config = include_once getcwd().'/Commands/config.php';
        if ($config) {
            $this->commands = array_merge($this->commands, $config['commands']);
        }

        parent::__construct($app, $events);
    }
}
