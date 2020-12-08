<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Seeder;

class InterestNetwork extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interest::create([
           'name' => 'All interests'
        ]);

        Interest::create([
            'name' => 'Healthy / Lifestyle'
        ]);

        Interest::create([
            'name' => 'Food and Drink'
        ]);

        Interest::create([
            'name' => 'Music'
        ]);

        Interest::create([
            'name' => 'Beauty'
        ]);

        Interest::create([
            'name' => 'Tourism / Travel'
        ]);

        Interest::create([
            'name' => 'Movies'
        ]);

        Interest::create([
            'name' => 'Gaming'
        ]);

        Interest::create([
            'name' => 'Fitness'
        ]);

        Interest::create([
            'name' => 'Photography'
        ]);

        Interest::create([
            'name' => 'Jewellery'
        ]);

        Interest::create([
            'name' => 'Gambling / Restricted Content'
        ]);

        Interest::create([
            'name' => 'Fashion'
        ]);
    }
}
