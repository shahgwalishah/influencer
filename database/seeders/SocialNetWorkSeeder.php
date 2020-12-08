<?php

namespace Database\Seeders;

use App\Models\SocialNetWorks;
use Illuminate\Database\Seeder;

class SocialNetWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialNetWorks::create([
           'name' => 'Instagram',
           'image' => '/assets/images/insta.png'
        ]);
        SocialNetWorks::create([
            'name' => 'Facebook',
            'image' => '/assets/images/facebook.png'
        ]);
        SocialNetWorks::create([
            'name' => 'Twitter',
            'image' => '/assets/images/twitter.png'
        ]);
        SocialNetWorks::create([
            'name' => 'TikTok',
            'image' => '/assets/images/tiktok.png'
        ]);
        SocialNetWorks::create([
            'name' => 'Youtube',
            'image' => '/assets/images/you_tube.png'
        ]);
        SocialNetWorks::create([
            'name' => 'Snapchat',
            'image' => '/assets/images/snap_chat.png'
        ]);
        SocialNetWorks::create([
            'name' => 'All Social Media',
            'image' => ''
        ]);
    }
}
