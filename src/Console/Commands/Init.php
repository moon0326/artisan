<?php

namespace Moon\Artisan\Console\Commands;

use Illuminate\Console\Command;

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
    protected $description = '';

    public function handle()
    {
        $cwd = getcwd().'/Commands';
        $configFile = $cwd.'/config.php';

        if (!is_dir($cwd)) {
            mkdir($cwd);
            $this->info("Created {$cwd}");
        } else {
            $this->comment("{$cwd} already exists.");
        }

        if (!file_exists($configFile)) {
            copy(__DIR__.'/../../config.php', $configFile);
            $this->info("Created {$configFile}");
        } else {
            $this->comment("{$cwd} already exists.");
        }
    }
}
