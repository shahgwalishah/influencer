<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberOfFollowers extends Model
{
    use HasFactory;

    protected $fillable = [
      'campaign_id','number_of_followers','social_media_id'
    ];
}
