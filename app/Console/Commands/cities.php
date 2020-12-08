<?php

namespace App\Console\Commands;

use App\Models\City;
use Illuminate\Console\Command;

class cities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'run:world_cities';

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
        $file = public_path().'/cities.json';
        $data =  file_get_contents($file,JSON_PRETTY_PRINT);
        $data = json_decode($data);
        $count = count($data);
        $this->output->progressStart($count);
        foreach ($data as  $d) {
            sleep(1);
            City::create([
                'name' => $d->name,
                'country_id' => $d->country_id,
                'country_code' => $d->country_code
            ]);
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }
}
