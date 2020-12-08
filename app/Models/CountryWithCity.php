<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryWithCity extends Model
{
    use HasFactory;

    protected $fillable = [
      'country_name',
      'city_name',
      'country_code',
      'currency'
    ];
}
