<?php

namespace App\Console\Commands;

use App\Models\Country;
use Illuminate\Console\Command;

class countries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:world_countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $file = public_path().'/countries.json';
        $data =  file_get_contents($file,JSON_PRETTY_PRINT);
        $data = json_decode($data);
        $count = count($data);
        $this->output->progressStart($count);
        foreach ($data as  $d) {
            sleep(1);
            Country::create([
                'name' => $d->name,
                'code' => $d->iso3,
                'capital' => $d->capital,
                'currency' => $d->currency
            ]);
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }
}
