<?php

namespace Stevepop\Laraquotes;

use Illuminate\Console\Command;

class QuotesCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'laraquote:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch an Inspiring quote';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @return mixed
     * @throws Exception
     */
    public function fire()
    {

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $this->comment(PHP_EOL . Quote::fetch() . PHP_EOL);
    }
}
