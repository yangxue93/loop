<?php

namespace Yangxue93\Loop\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'loop:publish {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "re-publish laravel-loop's assets, configuration, language and migration files. If you want overwrite the existing files, you can add the `--force` option";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $force = $this->option('force');
        $options = ['--provider' => 'Liubingzhe\Loop\LoopServiceProvider'];
        if ($force == true) {
            $options['--force'] = true;
        }
        $this->call('vendor:publish', $options);
        $this->call('view:clear');
    }
}
