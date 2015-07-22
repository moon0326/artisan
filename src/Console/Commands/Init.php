<?php

namespace Moon\Artisan\Console\Commands;

use Illuminate\Console\Command;
use Moon\Artisan\Artisan;

class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artisan:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates config file';

    public function handle()
    {
        $runningFrom = getcwd();
        $configFilePath = Artisan::getConfigFilePath();

        $artisan = $runningFrom.'/artisan';

        if (!file_exists($configFilePath)) {
            copy(__DIR__.'/../../config.php', $configFilePath);
            $this->info("Created {$configFilePath}");
        } else {
            $this->comment("{$cwd} already exists.");
        }

        if (!file_exists($artisan)) {
            copy(__DIR__.'/../../../artisan', $artisan);
        }
    }
}
