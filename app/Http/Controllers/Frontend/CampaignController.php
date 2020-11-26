<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function addCampaign()
    {
        return view('frontend.campaign.index');
    }

    public function myCampaign()
    {
        return view('frontend.campaign.myCampaign');
    }
}
