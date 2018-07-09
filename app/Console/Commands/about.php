<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class about extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'about';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command who this Project Belong';

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
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment("Create By Ingeniger Ibrahim Hilali");
    }
}
