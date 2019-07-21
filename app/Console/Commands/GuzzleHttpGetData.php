<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class GuzzleHttpGetData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'guzzle:get {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Guzzle get data';

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
        $url = $this->argument('url');
        $client = new Client();
        $res = $client->get($url);
        $this->line($res->getStatusCode());
        $this->line($res->getBody());
    }
}
