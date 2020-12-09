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
    const CAMPAIGN_HIDE = 0;
    const CAMPAIGN_SHOW = 1;
    const CAMPAIGN_DRAFT = 2;

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

    public static function createCampaign($request){
        return self::create([
            'name' => isset($request->campaign_name) ? $request->campaign_name : 'aa',
            'description' => $request->description,
            'hash_tags' => json_encode($request->hash_tag_description),
            'sector' => $request->sector,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'promo' => $request->promo_code,
            'display_on' => json_encode($request->social_net_works),
            'gender' => $request->gender,
            'age' => $request->age,
            'country' => $request->country,
            'city' => $request->city,
            'interest' => json_encode($request->interests)
        ]);
    }
}
