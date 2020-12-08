<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    const NUMBER_OF_FOLLOWERS_IN_STA_GRAM = 1;
    const NUMBER_OF_FOLLOWERS_FACEBOOK = 2;
    const NUMBER_OF_FOLLOWERS_TWITTER = 3;
    const NUMBER_OF_FOLLOWERS_TIK_TOK = 4;
    const NUMBER_OF_FOLLOWERS_YOU_TUBE = 5;
    const NUMBER_OF_FOLLOWERS_SNAP_CHAT = 6;

    public static function NumberOfFollowers(){
        return  [
            [ 'id' => 1 ,'name' => 'Instagram' ,'image' => '/assets/images/insta.png'],
            [ 'id' => 2 ,'name' => 'Facebook' ,'image' => '/assets/images/facebook.png'],
            [ 'id' => 3 ,'name' => 'Twitter' ,'image' => '/assets/images/twitter.png'],
            [ 'id' => 4 ,'name' => 'Tik Tok' ,'image' => '/assets/images/tiktok.png'],
            [ 'id' => 5 ,'name' => 'Youtube' ,'image' => '/assets/images/you_tube.png'],
            [ 'id' => 6 ,'name' => 'Snapchat' ,'image' => '/assets/images/snap_chat.png'],
        ];
    }

    protected $fillable = [
        'name',
        'description',
        'hash_tags',
        'sector',
        'start_date',
        'end_date',
        'promo',
        'display_on',
        'gender',
        'age',
        'country',
        'city',
        'interest'
    ];
}
